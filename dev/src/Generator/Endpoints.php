<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator;

use Illuminate\Support\Str;
use Inktweb\Bolcom\RetailerApi\Client\Config as ClientConfig;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Development\Config;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingPathsException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingTagException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingValidResponseException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\TooManyBodyParametersException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\TooManyValidResponsesException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnresolvedTypeException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedParameterTypeException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\Type;

class Endpoints extends Base
{
    protected const BASE_PATH = Config::ENDPOINTS_PATH;
    protected const BASE_NAMESPACE = Config::ENDPOINTS_NAMESPACE;

    /** @var Models */
    protected $models;

    /** @var Endpoints */
    protected $enums;

    public function __construct(string $apiVersion, ?array $data, Models $models, Enums\Endpoints $enums)
    {
        $this->models = $models;
        $this->enums = $enums;

        parent::__construct($apiVersion, $data);

        $this->uses->setCurrentScope(null);
        $this->uses->add(Endpoint::class);
    }

    protected function process(?array $data): array
    {
        if ($data === null) {
            throw new MissingPathsException();
        }

        $endpointPaths = $this->groupByEndpoint($data);
        $endpoints = [];

        foreach ($endpointPaths as $endpoint => $path) {
            $endpoints[] = $this->processEndpoint($endpoint, $path);
        }

        return $endpoints;
    }

    protected function groupByEndpoint(array $paths): array
    {
        $endpoints = [];

        foreach ($paths as $resource => $path) {
            foreach ($path as $method => $data) {
                $tag = $data['tags'][0] ?? null;

                if ($tag === null) {
                    throw new MissingTagException("There is no tag for {$method} {$resource}.");
                }

                $endpoints[$tag][$resource][$method] = $data;
            }
        }

        return $endpoints;
    }

    protected function processEndpoint(string $name, array $path): ClassType
    {
        $endpointName = $this->getClassName($name);
        $this->uses->setCurrentScope($endpointName);

        $endpoint = (new ClassType())
            ->setFinal()
            ->setName($endpointName)
            ->addExtend(Endpoint::class);

        foreach ($path as $resource => $methodData) {
            foreach ($methodData as $methodVerb => $data) {
                $methodName = Str::camel($data['operationId']);
                $method = $endpoint->addMethod($methodName);

                $method->addComment($this->wrapText(rtrim($data['summary'], '.')) . '.');
                $method->addComment('');
                $method->addComment($this->wrapText($data['description']));

                $this->processParameters($data['parameters'] ?? null, $method, $endpoint);
                $errorResponses = $this->processResponses($data['responses'], $method);

                $method->addBody($this->generateRequestCode($resource, $methodVerb, $data, $method, $errorResponses));
            }
        }

        return $endpoint;
    }

    protected function processParameters(?array $parameters, Method $method, ClassType $endpoint): void
    {
        if (empty($parameters)) {
            return;
        }

        usort(
            $parameters,
            function (array $a, array $b) {
                return $b['required'] <=> $a['required'];
            }
        );

        foreach ($parameters as $parameter) {
            $parameterName = Str::camel($parameter['name']);
            $methodParameter = $method
                ->addParameter($parameterName)
                ->setNullable($parameter['in'] !== 'body' && !$parameter['required'])
                ->setType(
                    $this->resolveType(
                        $parameter['type'] ?? null,
                        $parameter['schema']['$ref'] ?? null,
                        $this->enums->getEnum($endpoint->getName(), $parameter['name'] ?? null)
                    )
                );

            if ($methodParameter->isNullable()) {
                $methodParameter->setDefaultValue(null);
            }
        }
    }

    protected function resolveType(?string $type, ?string $ref, ?string $enum = null): string
    {
        if ($enum !== null) {
            $this->uses->add($enum);
            return $enum;
        }

        if ($type !== null) {
            switch ($type) {
                case 'string':
                    return Type::STRING;
                case 'number':
                    return Type::FLOAT;
                case 'array':
                    return Type::ARRAY;
                case 'integer':
                    return Type::INT;
                case 'boolean':
                    return Type::BOOL;
                default:
                    throw new UnsupportedParameterTypeException("The type '{$type}' is unsupported.");
            }
        }

        if ($ref !== null) {
            $fullyQualifiedClassName = $this->models->getFullyQualifiedClassName(
                $this->models->getClass($ref)->getName()
            );
            $this->uses->add($fullyQualifiedClassName);
            return $fullyQualifiedClassName;
        }

        throw new UnresolvedTypeException("Nothing found for type '{$type}' or reference '{$ref}'.");
    }

    protected function processResponses(array $responses, Method $method): array
    {
        $validResponses = array_filter(
            array_keys($responses),
            function (int $key) {
                return $key >= 200 && $key < 300;
            }
        );

        if (empty($validResponses)) {
            throw new MissingValidResponseException("No valid responses found for method '{$method->getName()}'.");
        }

        if (count($validResponses) > 1) {
            throw new TooManyValidResponsesException(
                "Too many valid responses found for method '{$method->getName()}'."
            );
        }

        $validResponse = $responses[$validResponses[0]];

        try {
            $method->setReturnType(
                $this->resolveType(
                    $validResponse['schema']['type'] ?? null,
                    $validResponse['schema']['$ref'] ?? null
                )
            );
        } catch (UnresolvedTypeException $e) {
            $method->setReturnType(Type::STRING);
        }

        $errorResponses = [];

        foreach ($responses as $errorCode => $response) {
            if ($errorCode === $validResponses[0]) {
                continue;
            }

            $errorResponses[$errorCode] = $this->resolveType(
                $response['schema']['type'] ?? null,
                $response['schema']['$ref'] ?? null
            );
        }

        return $errorResponses;
    }

    protected function generateRequestCode(
        string $resource,
        string $verb,
        array $data,
        Method $method,
        array $errorResponses
    ): string {
        $strippedResource = preg_replace(
            "#^" . preg_quote(ClientConfig::API_PATH, '#') . "/#",
            '',
            $resource
        );
        $sanitizedResource = var_export($strippedResource, true);
        $sanitizedVerb = var_export($verb, true);

        $parameters = $data['parameters'] ?? null;
        $pathParameters = $this->getParameters('path', $parameters);
        $queryParameters = $this->getParameters('query', $parameters);
        $bodyParameters = $this->getParameters('body', $parameters);

        $requestHeaders = $this->getArray($data['consumes'] ?? [$this->defaultContentType]);
        $responseHeaders = $this->getArray($data['produces'] ?? null);

        $errorResponsesArray = $this->getErrorResponseExport($errorResponses);

        $returnType = $method->getReturnType();
        if (strpos($returnType, '\\') !== false) {
            $prepend = "\\$returnType::fromArray(";
            $append = ")";
        } else {
            $prepend = $returnType === 'array'
                ? ""
                : "($returnType)";
            $append = "";
        }

        return <<<CODE
return {$prepend}
    \$this->request(
        $sanitizedVerb,
        $sanitizedResource,
        $pathParameters,
        $queryParameters,
        $bodyParameters,
        $requestHeaders,
        $responseHeaders,
        $errorResponsesArray
    )
$append;
CODE;
    }

    protected function getParameters(string $in, ?array $parameters): string
    {
        if (empty($parameters)) {
            return '[]';
        }

        $result = [];
        $isBody = $in === 'body';

        foreach ($parameters as $parameter) {
            if ($parameter['in'] !== $in) {
                continue;
            }

            $fieldName = $parameter['name'];
            $paramName = Str::camel($fieldName);

            $result[] = $isBody
                ? "\${$paramName}"
                : "'$fieldName' => \${$paramName}";
        }

        if ($isBody and count($result) > 1) {
            throw new TooManyBodyParametersException();
        }

        if ($isBody) {
            return $result[0] ?? 'null';
        }

        return empty($result)
            ? '[]'
            : "[\n" . implode(",\n", $result) . ",\n]";
    }

    protected function getErrorResponseExport(array $errorResponses): string
    {
        $result = [];

        foreach ($errorResponses as $errorCode => $className) {
            $result[] = "{$errorCode} => \\{$className}::class";
        }

        return empty($result)
            ? '[]'
            : "[\n" . implode(",\n", $result) . ",\n]";
    }

    protected function getArray(?array $data): string
    {
        if ($data === null) {
            return 'null';
        }

        $result = [];

        foreach ($data as $row) {
            $result[] = var_export($row, true);
        }

        return empty($result)
            ? '[]'
            : "[\n" . implode(",\n", $result) . ",\n]";
    }
}

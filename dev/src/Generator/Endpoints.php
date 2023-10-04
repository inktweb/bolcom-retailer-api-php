<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Generator;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Str;
use Inktweb\Bolcom\RetailerApi\Client\Config as ClientConfig;
use Inktweb\Bolcom\RetailerApi\Contracts\Endpoint;
use Inktweb\Bolcom\RetailerApi\Development\Config;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingPathsException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingResponseContentException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingResponseSchemaException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingTagException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\MissingValidResponseException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\TooManyBodyParametersException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\TooManyValidResponsesException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnresolvedTypeException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\UnsupportedParameterTypeException;
use Inktweb\Bolcom\RetailerApi\Exceptions\ApiException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use Inktweb\Bolcom\RetailerApi\Exceptions\UnexpectedResponseContentTypeException;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\Type;
use Psr\Http\Message\StreamInterface;

class Endpoints extends Base
{
    protected const BASE_PATH = Config::ENDPOINTS_PATH;
    protected const BASE_NAMESPACE = Config::ENDPOINTS_NAMESPACE;
    protected const REQUEST_EXCEPTIONS = [
        ApiException::class => 'ApiException',
        GuzzleException::class => 'GuzzleException',
        UnexpectedResponseContentTypeException::class => 'UnexpectedResponseContentTypeException',
        UnknownCollectionFormatException::class => 'UnknownCollectionFormatException',
    ];

    protected Models $models;
    protected Enums\Endpoints $enums;

    public function __construct(
        string $apiVersion,
        string $namespace,
        ?array $data,
        Models $models,
        Enums\Endpoints $enums
    ) {
        $this->models = $models;
        $this->enums = $enums;

        parent::__construct($apiVersion, $namespace, $data);

        $this->uses->setCurrentScope(null);
        $this->uses->add(Endpoint::class);
    }

    /**
     * @throws MissingPathsException
     * @throws MissingTagException
     * @throws MissingValidResponseException
     * @throws TooManyValidResponsesException
     * @throws UnresolvedTypeException
     * @throws UnsupportedParameterTypeException
     * @throws TooManyBodyParametersException
     */
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

    /**
     * @throws MissingTagException
     */
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

    /**
     * @throws MissingValidResponseException
     * @throws TooManyValidResponsesException
     * @throws UnresolvedTypeException
     * @throws UnsupportedParameterTypeException
     * @throws TooManyBodyParametersException
     */
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
                $method->addComment('');

                $this->processParameters($data['parameters'] ?? null, $method, $endpoint);
                $this->processRequestBody($data['requestBody'] ?? null, $method, $endpoint);
                $errorResponses = $this->processResponses($data['responses'], $method);

                $this->addRequestThrows($method);
                $method->addBody($this->generateRequestCode($resource, $methodVerb, $data, $method, $errorResponses));
            }
        }

        return $endpoint;
    }

    /**
     * @throws UnsupportedParameterTypeException
     * @throws UnresolvedTypeException
     */
    protected function processRequestBody(?array $requestBody, Method $method, ClassType $endpoint): void
    {
        if (empty($requestBody) || !isset($requestBody['content'])) {
            return;
        }

        $schema = current($requestBody['content'])['schema'] ?? null;

        if (empty($schema)) {
            return;
        }

        if (key($requestBody['content']) === 'multipart/form-data') {
            $this->processRequestBodyProperties($schema['properties'] ?? null, $method, $endpoint);
            return;
        }

        $ref = $schema['$ref'] ?? null;

        if (empty($ref)) {
            return;
        }

        $method
            ->addParameter(
                $this->getRefBasename($ref)
            )
            ->setType(
                $this->resolveType(null, $ref)
            );
    }

    protected function processRequestBodyProperties(?array $properties, Method $method, ClassType $endpoint): void
    {
        if (empty($properties)) {
            return;
        }

        foreach ($properties as $name => $property) {
            $type = $property['type'] ?? null;
            $format = $property['format'] ?? null;

            if ($type !== 'string' && $format !== 'binary') {
                continue;
            }

            $name = Str::camel($name);

            $method
                ->addParameter($name)
                ->setType(StreamInterface::class);

            $this->uses->add(StreamInterface::class);
        }
    }

    /**
     * @throws UnresolvedTypeException
     * @throws UnsupportedParameterTypeException
     */
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
                        $parameter['schema']['type'] ?? null,
                        $parameter['schema']['$ref'] ?? null,
                        $this->enums->getEnum($endpoint->getName(), $parameter['name'] ?? null)
                    )
                );

            if ($methodParameter->isNullable()) {
                $methodParameter->setDefaultValue(null);
            }
        }
    }

    /**
     * @throws UnsupportedParameterTypeException
     * @throws UnresolvedTypeException
     */
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

    /**
     * @throws MissingValidResponseException
     * @throws TooManyValidResponsesException
     * @throws UnsupportedParameterTypeException
     * @throws UnresolvedTypeException
     * @throws MissingResponseContentException
     * @throws MissingResponseSchemaException
     */
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

        $content = $validResponse['content'] ?? null;
        if ($content === null) {
            throw new MissingResponseContentException();
        }

        $schema = current($content)['schema'] ?? null;
        if ($schema === null) {
            throw new MissingResponseSchemaException();
        }

        try {
            $method->setReturnType(
                $this->resolveType(
                    $schema['type'] ?? null,
                    $schema['$ref'] ?? null
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

            $content = $response['content'] ?? null;
            if ($content === null) {
                throw new MissingResponseContentException();
            }

            $schema = current($content)['schema'] ?? null;
            if ($schema === null) {
                throw new MissingResponseSchemaException();
            }

            $errorResponses[$errorCode] = $this->resolveType(
                $schema['type'] ?? null,
                $schema['$ref'] ?? null
            );
        }

        return $errorResponses;
    }

    protected function addRequestThrows(Method $method): void
    {
        foreach (static::REQUEST_EXCEPTIONS as $className => $shortName) {
            $this->uses->add($className);
            $method->addComment("@throws {$shortName}");
        }
    }

    /**
     * @throws TooManyBodyParametersException
     */
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
        $headerParameters = $this->getParameters('header', $parameters);
        $pathParameters = $this->getParameters('path', $parameters);
        $queryParameters = $this->getParameters('query', $parameters);
        $bodyParameters = $this->getBodyParameters($data);
        $multipartFormParameters = $this->getMultipartFormParameters($data);

        $produces = $this->getResponseContentTypes($data['responses'] ?? null);
        $responseHeaders = $this->getArray($produces);
        $requestHeaders = $responseHeaders;

        $errorResponsesArray = $this->getErrorResponseExport($errorResponses);

        $returnType = $method->getReturnType();
        if (strpos($returnType, '\\') !== false) {
            $prepend = "\\$returnType::fromArray(";
            $append = "->getJson()\n)";
        } else {
            $method->setReturnType(StreamInterface::class);
            $this->uses->add(StreamInterface::class);
            $prepend = "";
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
        $errorResponsesArray,
        $headerParameters,
        $multipartFormParameters
    )->getBody(){$append};
CODE;
    }

    protected function getBodyParameters(array $data): string
    {
        $content = $data['requestBody']['content'] ?? null;

        if ($content === null) {
            return 'null';
        }

        $ref = current($content)['schema']['$ref'] ?? null;

        return $ref !== null
            ? "\${$this->getRefBasename($ref)}"
            : 'null';
    }

    protected function getMultipartFormParameters(array $data): string
    {
        $content = $data['requestBody']['content'] ?? null;

        if ($content === null) {
            return 'null';
        }

        if (key($content) !== 'multipart/form-data') {
            return 'null';
        }

        $properties = current($content)['schema']['properties'] ?? [];
        $parameters = [];

        foreach ($properties as $name => $property) {
            $type = $property['type'] ?? null;
            $format = $property['format'] ?? null;

            if ($type !== 'string' && $format !== 'binary') {
                continue;
            }

            $name = Str::camel($name);
            $parameters[] = <<<PARAMETER
[
    'name' => '{$name}',
    'contents' => \${$name},
],
PARAMETER;
        }

        return "[\n" . implode("\n", $parameters) . "\n]";
    }

    /**
     * @throws TooManyBodyParametersException
     */
    protected function getParameters(string $in, ?array $parameters): string
    {
        $isBody = $in === 'body';

        if (empty($parameters)) {
            return $isBody
                ? 'null'
                : '[]';
        }

        $result = [];

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

    protected function getResponseContentTypes(?array $responses): array
    {
        if (empty($responses)) {
            return [];
        }

        $responseContentTypes = [];

        foreach ($responses as $content) {
            if (!isset($content['content'])) {
                continue;
            }

            $responseContentTypes[] = key($content['content']);
        }

        return array_unique($responseContentTypes);
    }

    protected function getRefBasename($ref): string
    {
        return Str::camel(basename($ref));
    }
}

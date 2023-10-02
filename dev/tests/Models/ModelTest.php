<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Tests\Models;

use Exception;
use Inktweb\Bolcom\RetailerApi\Contracts\Enum;
use Inktweb\Bolcom\RetailerApi\Contracts\Model;
use Inktweb\Bolcom\RetailerApi\Development\Concerns\CheckOpenApiVersion;
use Inktweb\Bolcom\RetailerApi\Development\Concerns\GetApiSpec;
use Inktweb\Bolcom\RetailerApi\Development\Concerns\GetClassName;
use Inktweb\Bolcom\RetailerApi\Development\Config;
use JsonException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * @coversDefaultClass \Inktweb\Bolcom\RetailerApi\Contracts\Model
 */
class ModelTest extends TestCase
{
    use GetApiSpec;
    use CheckOpenApiVersion;
    use GetClassName;

    /**
     * @covers ::fromArray
     */
    public function testModel(): void
    {
        foreach ($this->getApiSpec() as $spec) {
            $apiVersion = $spec['version'];

            foreach ($spec['namespaces'] as $apiNamespace => $apiSpec) {
                $this->checkOpenApiVersion($apiSpec['openapi'] ?? null);

                $path = Config::MODELS_PATH . DIRECTORY_SEPARATOR . $apiVersion;
                $namespace = Config::MODELS_NAMESPACE . '\\' . $apiVersion . '\\' . $apiNamespace;

                $this->assertDirectoryExists($path);

                foreach ($apiSpec['components']['schemas'] as $schema => $data) {
                    $className = $this->getClassName($schema);
                    $className = "{$namespace}\\{$className}";
                    $exampleData = $this->getExampleData($data['properties'], $apiSpec['components']['schemas']);

                    /** @noinspection PhpUndefinedMethodInspection */
                    $class = $className::fromArray($exampleData);

                    $this->assertArrayEqualsObject($class, $exampleData);
                }
            }
        }
    }

    protected function getExampleData(array $properties, array $schemas, int $loop = 0): array
    {
        $data = [];

        if ($loop > 25) {
            return $data;
        };

        foreach ($properties as $key => $value) {
            if (isset($value['example'])) {
                $data[$key] = $this->castToType(
                    $value['type'],
                    is_array($value['example'])
                        ? $value['example'][0]
                        : $value['example']
                );
                continue;
            }

            if (isset($value['$ref'])) {
                $data[$key] = $this->getExampleData(
                    $this->getSchema($value['$ref'], $schemas)['properties'],
                    $schemas,
                    $loop + 1
                );
            }

            if (isset($value['type'])
                && $value['type'] === 'array'
                && isset($value['items']['$ref'])
            ) {
                $data[$key][] = $this->getExampleData(
                    $this->getSchema($value['items']['$ref'], $schemas)['properties'],
                    $schemas,
                    $loop + 1
                );
            }
        }

        return $data;
    }

    protected function getSchema(string $name, array $definitions): array
    {
        $key = preg_replace('{^#/components/schemas/}', '', $name);

        if (isset($definitions[$key])) {
            return $definitions[$key];
        }

        throw new Exception("Schema '{$key}' not found.");
    }

    protected function assertArrayEqualsObject(Model $class, array $exampleData): void
    {
        foreach ($exampleData as $key => $value) {
            $getter = "get{$key}";

            if (!is_array($value)) {
                $result = $class->{$getter}();

                if ($result instanceof Enum) {
                    $this->assertTrue($result->is($value));
                    continue;
                }

                $this->assertEquals($value, $result);
                continue;
            }

            $objects = $class->{$getter}();

            if (is_object($objects)) {
                $this->assertArrayEqualsObject($objects, $value);
                continue;
            }

            foreach ($value as $arrayKey => $arrayValue) {
                if ($objects[$arrayKey] instanceof Model) {
                    $this->assertArrayEqualsObject($objects[$arrayKey], $arrayValue);
                } else {
                    $this->assertEquals($objects[$arrayKey], $arrayValue);
                }
            }
        }
    }

    protected function castToType(string $type, string $data)
    {
        switch ($type) {
            case 'string':
                return $data;

            case 'number':
                // no break
            case 'integer':
                return (int)$data;

            case 'boolean':
                return (bool)$data;

            case 'array':
                try {
                    return json_decode($data, null, 512, JSON_THROW_ON_ERROR);
                } catch (JsonException $e) {
                    try {
                        return json_decode(
                            str_replace("'", '"', $data),
                            null,
                            512,
                            JSON_THROW_ON_ERROR
                        );
                    } catch (JsonException $e) {
                        return [$data];
                    }
                }
            // no break

            default:
                throw new RuntimeException("Unknown casting type: {$type}");
        }
    }
}

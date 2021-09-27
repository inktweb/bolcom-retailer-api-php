<?php

namespace Inktweb\Bolcom\RetailerApi\Contracts;

use Inktweb\Bolcom\RetailerApi\Models\V5\AttributeValue;
use JsonSerializable;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionProperty;

abstract class Model implements JsonSerializable
{
    public static function fromArray(array $data): self
    {
        $model = new static();
        $reflection = new ReflectionClass($model);

        foreach ($data as $key => $value) {
            $methodName = "set{$key}";

            if (!$reflection->hasMethod($methodName)) {
                continue;
            }

            [$parameter] = $reflection->getMethod($methodName)->getParameters();

            $type = $parameter->getType();
            $isBuiltin = $type instanceof ReflectionNamedType && $type->isBuiltin();

            if ($isBuiltin) {
                $model->{$methodName}($value);
                continue;
            }

            if (is_string($value)) {
                $enumClassName = $type->getName();

                $model->{$methodName}(
                    (new $enumClassName())->set($value)
                );

                continue;
            }

            if (!is_numeric(key($value))) {
                $value = [$value];
            }

            $model->{$methodName}(...array_map([$type->getName(), 'fromArray'], $value));
        }

        return $model;
    }

    public function jsonSerialize(): array
    {
        $toSerialize = [];
        $reflection = new ReflectionClass($this);

        $properties = $reflection->getProperties(ReflectionProperty::IS_PROTECTED);

        foreach ($properties as $property) {
            if ($property->isStatic()) {
                continue;
            }

            $key = $property->getName();

            if (!$reflection->hasMethod("get{$key}")) {
                continue;
            }

            $value = $this->{"get{$key}"}();

            if (empty($value)) {
                continue;
            }

            $toSerialize[$key] = $value;
        }

        return $toSerialize;
    }
}

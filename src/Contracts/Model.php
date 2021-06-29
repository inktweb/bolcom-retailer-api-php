<?php

namespace Inktweb\Bolcom\RetailerApi\Contracts;

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

            $values = is_array($value)
                ? $value
                : [$value];

            if ($isBuiltin) {
                $model->{$methodName}(...$values);
                continue;
            }

            $model->{$methodName}(...array_map([$type->getName(), 'fromArray'], $values));
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
            $value = $property->getValue($this);

            $toSerialize[$key] = $value;
        }

        return $toSerialize;
    }
}

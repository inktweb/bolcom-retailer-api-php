<?php

namespace Inktweb\Bolcom\RetailerApi\Contracts;

use JsonSerializable;
use ReflectionClass;
use ReflectionProperty;

abstract class Model implements JsonSerializable
{
    public static function fromArray(array $data): self
    {
        $model = new static();

        foreach ($data as $key => $value) {
            $methodName = "set{$key}";

            if (!method_exists($model, $methodName)) {
                continue;
            }

            if (is_array($value)) {
                $model->{$methodName}(...$value);
                continue;
            }

            $model->{$methodName}($value);
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

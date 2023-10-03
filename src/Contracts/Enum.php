<?php

namespace Inktweb\Bolcom\RetailerApi\Contracts;

use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\MaxItemsException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\MinItemsException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\InvalidEnumValueException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UniqueItemsException;
use Inktweb\Bolcom\RetailerApi\Exceptions\Enum\UnknownCollectionFormatException;
use JsonSerializable;

abstract class Enum implements JsonSerializable
{
    protected const COLLECTION_FORMAT_CSV = 'csv';
    protected const COLLECTION_FORMAT_SSV = 'ssv';
    protected const COLLECTION_FORMAT_TSV = 'tsv';
    protected const COLLECTION_FORMAT_PIPES = 'pipes';
    protected const COLLECTION_FORMAT_MULTI = 'multi';

    protected const COLLECTION_FORMAT = self::COLLECTION_FORMAT_MULTI;

    protected const MIN_ITEMS = 0;
    protected const MAX_ITEMS = null;
    protected const UNIQUE_ITEMS = false;

    protected array $delimiters = [
        self::COLLECTION_FORMAT_CSV => ',',
        self::COLLECTION_FORMAT_SSV => ' ',
        self::COLLECTION_FORMAT_TSV => "\t",
        self::COLLECTION_FORMAT_PIPES => '|',
    ];

    /** @var string[] */
    protected array $allowedValues = [];

    /** @var string[] */
    protected array $values = [];

    /**
     * @throws UniqueItemsException
     * @throws MaxItemsException
     * @throws InvalidEnumValueException
     * @throws MinItemsException
     */
    public function __construct(string ...$values)
    {
        if (!empty($values)) {
            $this->set(...$values);
        }
    }

    /**
     * @throws UniqueItemsException
     * @throws MaxItemsException
     * @throws MinItemsException
     * @throws InvalidEnumValueException
     */
    public function add(string $value): self
    {
        return $this->set(
            ...array_merge(
                $this->values,
                [$value]
            )
        );
    }

    /**
     * @throws UniqueItemsException
     * @throws MaxItemsException
     * @throws InvalidEnumValueException
     * @throws MinItemsException
     */
    public function set(string ...$values): self
    {
        $this->validateValues($values);
        $this->values = $values;
        return $this;
    }

    public function get(): array
    {
        return $this->values;
    }

    /**
     * The enum contains at least this value.
     */
    public function contains(string $value): bool
    {
        return in_array($value, $this->values, true);
    }

    /**
     * The enum has only these values (in any order.)
     */
    public function has(string ...$values): bool
    {
        if (count($this->values) !== count($values)) {
            return false;
        }

        return array_reduce(
            $this->values,
            function (bool $carry, string $value) use ($values) {
                return $carry
                    && in_array($value, $values, true);
            },
            true
        );
    }

    /**
     * The enum has only this value.
     */
    public function is(string $value): bool
    {
        return count($this->values) === 1
            && $this->has($value);
    }

    public function isEmpty(): bool
    {
        return count($this->values) === 0;
    }

    /**
     * @throws UniqueItemsException
     * @throws MaxItemsException
     * @throws InvalidEnumValueException
     * @throws MinItemsException
     */
    protected function validateValues(array $values): void
    {
        foreach ($values as $value) {
            if (!in_array($value, $this->allowedValues)) {
                $allowedValues = '["' . implode('","', $this->allowedValues) . '"]';

                throw new InvalidEnumValueException(
                    "The value '{$value}' is not one of the allowed values: {$allowedValues}"
                );
            }
        }

        if (count($values) < static::MIN_ITEMS) {
            throw new MinItemsException();
        }

        if (static::MAX_ITEMS !== null && count($values) > static::MAX_ITEMS) {
            throw new MaxItemsException();
        }

        if (static::UNIQUE_ITEMS && array_unique($values) !== $values) {
            throw new UniqueItemsException();
        }
    }

    /**
     * @throws UnknownCollectionFormatException
     */
    public function compile(): array
    {
        $collectionFormat = static::COLLECTION_FORMAT;
        $delimiter = $this->delimiters[$collectionFormat] ?? null;

        if ($delimiter !== null) {
            return [implode($delimiter, $this->values)];
        }

        switch ($collectionFormat) {
            case static::COLLECTION_FORMAT_MULTI:
                return $this->values;
            default:
                // do nothing
        }

        throw new UnknownCollectionFormatException(
            "The collection format '{$collectionFormat}' is is unknown or not implemented."
        );
    }

    /**
     * @throws UnknownCollectionFormatException
     */
    public function jsonSerialize(): string
    {
        return implode(' ', $this->compile());
    }

    /**
     * @throws UnknownCollectionFormatException
     */
    public function __toString(): string
    {
        return $this->jsonSerialize();
    }
}

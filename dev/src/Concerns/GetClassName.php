<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Concerns;

use Illuminate\Support\Str;

trait GetClassName
{
    protected array $reservedStrings = [
        'Return' => 'ReturnMerchandise',
    ];

    protected function getClassName(string $name): string
    {
        $className = Str::studly(preg_replace('/\W/', ' ', $name));
        return $this->reservedStrings[$className] ?? $className;
    }
}

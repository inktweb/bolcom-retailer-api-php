<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Concerns;

use Generator as BaseGenerator;
use Inktweb\Bolcom\RetailerApi\Development\Config;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\FileReadException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\JsonDecodeException;

trait GetApiSpec
{
    protected function getApiSpec(): BaseGenerator
    {
        $files = glob(Config::API_SPEC_GLOB_PATTERN);

        foreach ($files as $file) {
            $contents = @file_get_contents($file);
            if ($contents === false) {
                throw new FileReadException("The file '{$file}' could not be read.");
            }

            $data = @json_decode($contents, true);
            if ($data === null) {
                throw new JsonDecodeException("The file '{$file}' could not be decoded.");
            }

            yield $data;
        }
    }
}

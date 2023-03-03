<?php

namespace Inktweb\Bolcom\RetailerApi\Development\Concerns;

use Generator as BaseGenerator;
use Illuminate\Support\Str;
use Inktweb\Bolcom\RetailerApi\Development\Config;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\FileReadException;
use Inktweb\Bolcom\RetailerApi\Development\Exceptions\JsonDecodeException;

trait GetApiSpec
{
    /**
     * @yield array
     */
    protected function getApiSpec(): BaseGenerator
    {
        $directories = glob(Config::API_SPEC_DIR_GLOB_PATTERN, GLOB_ONLYDIR);

        foreach ($directories as $directory) {
            $version = Str::upper(basename($directory));
            $namespaceData = [];
            $files = glob($directory . DIRECTORY_SEPARATOR . Config::API_SPEC_FILE_GLOB_PATTERN);

            foreach ($files as $file) {
                $contents = @file_get_contents($file);
                if ($contents === false) {
                    throw new FileReadException("The file '{$file}' could not be read.");
                }

                $data = @json_decode($contents, true);
                if ($data === null) {
                    throw new JsonDecodeException("The file '{$file}' could not be decoded.");
                }

                $namespace = Str::ucfirst(Str::camel(basename($file, '.json')));
                $namespaceData[$namespace] = $data;
            }

            yield [
                'version' => $version,
                'namespaces' => $namespaceData,
            ];
        }
    }
}

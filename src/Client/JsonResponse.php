<?php

namespace Inktweb\Bolcom\RetailerApi\Client;

use GuzzleHttp\Psr7\StreamDecoratorTrait;
use GuzzleHttp\Utils;
use Psr\Http\Message\StreamInterface;

class JsonResponse implements StreamInterface
{
    use StreamDecoratorTrait;

    public function getJson(): array
    {
        $json = Utils::jsonDecode((string)$this, true);

        return is_array($json)
            ? $json
            : [];
    }
}

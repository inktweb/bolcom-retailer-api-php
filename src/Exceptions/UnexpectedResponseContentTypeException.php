<?php

namespace Inktweb\Bolcom\RetailerApi\Exceptions;

use Psr\Http\Message\ResponseInterface;

class UnexpectedResponseContentTypeException extends EndpointException
{
    protected ResponseInterface $response;

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function setResponse(ResponseInterface $response): self
    {
        $this->response = $response;
        return $this;
    }
}

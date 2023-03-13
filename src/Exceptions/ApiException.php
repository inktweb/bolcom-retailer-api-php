<?php

namespace Inktweb\Bolcom\RetailerApi\Exceptions;

use GuzzleHttp\Exception\RequestException;
use Inktweb\Bolcom\RetailerApi\Contracts\Model;

class ApiException extends RequestException
{
    protected ?Model $model = null;

    public function getModel(): ?Model
    {
        return $this->model;
    }

    public function hasModel(): bool
    {
        return isset($this->model);
    }

    public function setModel(?Model $model): self
    {
        $this->model = $model;
        return $this;
    }
}

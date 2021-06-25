<?php

namespace Inktweb\Bolcom\RetailerApi\Exceptions;

use GuzzleHttp\Exception\RequestException;
use Inktweb\Bolcom\RetailerApi\Contracts\Model;

class ApiException extends RequestException
{
    /** @var Model|null */
    protected $model;

    public function getModel(): ?Model
    {
        return $this->model;
    }

    public function hasModel(): bool
    {
        return $this->model !== null;
    }

    public function setModel(Model $model): self
    {
        $this->model = $model;
        return $this;
    }
}

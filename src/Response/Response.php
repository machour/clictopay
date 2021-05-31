<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Response;

/**
 * @property-read string $errorMessage
 * @property-read int $errorCode
 */
class Response
{
    private $_data;

    public function __construct(string $data)
    {
        $this->_data = json_decode($data, true);
    }

    public function __get($name)
    {
        return $this->_data[$name] ?? null;
    }

    public function __isset($name)
    {
        return isset($this->_data[$name]);
    }

    public function isOk(): bool
    {
        return !$this->errorCode;
    }

    public function getData(): array
    {
        return $this->_data;
    }

}
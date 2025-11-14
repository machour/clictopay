<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Data;

use Machour\ClicToPay\Exception;
use Spatie\LaravelData\Data;

class ResponseData extends Data
{
    public function __construct(
        public ?string $errorMessage = null,
        public ?int $errorCode = null,
    ) {}

    /**
     * @throws \Machour\ClicToPay\Exception
     */
    public static function from(mixed ...$payloads): static
    {
        $ret = parent::from(...$payloads);
        if (!$ret->isOk()) {
            throw new Exception($ret->errorMessage ?? 'Unknown error', $ret->errorCode ?? 0);
        }
        return $ret;
    }

    public function isOk(): bool
    {
        return $this->errorCode === null || $this->errorCode === 0;
    }
}

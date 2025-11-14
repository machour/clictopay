<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Reponses;

class UrlResponse extends Response
{
    public function __construct(
        public ?string $orderId = null,
        public ?string $formUrl = null,
        ?string $errorMessage = null,
        ?int $errorCode = null,
    ) {
        parent::__construct($errorMessage, $errorCode);
    }
}

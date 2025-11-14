<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Data;

class StatusResponseData extends ResponseData
{
    public function __construct(
        public ?int $OrderStatus = null,
        public ?string $OrderNumber = null,
        public ?string $Pan = null,
        public ?string $expiration = null,
        public ?string $cardholderName = null,
        public ?int $amount = null,
        public ?string $currency = null,
        public ?int $depositAmount = null,
        public ?string $approvalCode = null,
        public ?int $authCode = null,
        public ?string $ip = null,
        public ?string $clientId = null,
        public ?string $bindingId = null,
        ?string $errorMessage = null,
        ?int $errorCode = null,
    ) {
        parent::__construct($errorMessage, $errorCode);
    }
}

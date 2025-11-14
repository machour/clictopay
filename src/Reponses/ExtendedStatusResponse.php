<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Reponses;

class ExtendedStatusResponse extends Response
{
    public function __construct(
        public ?string $orderNumber = null,
        public ?int $orderStatus = null,
        public ?int $actionCode = null,
        public ?string $actionCodeDescription = null,
        public ?string $originalActionCode = null,
        public ?int $amount = null,
        public ?string $currency = null,
        public ?int $date = null,
        public ?int $depositedDate = null,
        public ?string $orderDescription = null,
        public ?string $ip = null,
        public ?array $merchantOrderParams = null,
        public ?array $transactionAttributes = null,
        public ?array $attributes = null,
        public ?array $cardAuthInfo = null,
        public ?int $authDateTime = null,
        public ?string $terminalId = null,
        public ?string $authRefNum = null,
        public ?array $paymentAmountInfo = null,
        public ?array $bankInfo = null,
        public ?array $payerData = null,
        public ?bool $chargeback = null,
        public ?string $paymentWay = null,
        ?string $errorMessage = null,
        ?int $errorCode = null,
    ) {
        parent::__construct($errorMessage, $errorCode);
    }
}

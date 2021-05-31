<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Response;

/**
 * @property-read string $orderNumber
 * @property-read int $orderStatus
 * @property-read int $actionCode
 * @property-read string $actionCodeDescription
 * @property-read string $originalActionCode
 * @property-read int $amount
 * @property-read string $currency
 * @property-read int $date
 * @property-read int $depositedDate
 * @property-read string $orderDescription
 * @property-read string $ip
 * @property-read array $merchantOrderParams
 * @property-read array $transactionAttributes
 * @property-read array $attributes
 * @property-read array $cardAuthInfo
 * @property-read int $authDateTime
 * @property-read string $terminalId
 * @property-read string $authRefNum
 * @property-read array $paymentAmountInfo
 * @property-read array $bankInfo
 * @property-read array $payerData
 * @property-read bool $chageback
 * @property-read string $paymentWay
 */
class ExtendedStatusResponse extends Response
{
}
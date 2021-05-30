<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Response;

/**
 * @property-read string $expiration
 * @property-read string $cardholderName
 * @property-read integer $depositAmount
 * @property-read string $currency
 * @property-read string $approvalCode
 * @property-read integer $authCode
 * @property-read string $clientId
 * @property-read string $bindingId
 * @property-read string $OrderStatus
 * @property-read string $OrderNumber
 * @property-read string $Pan
 * @property-read integer $amount
 */
class ExtendedStatusResponse extends Response
{
}
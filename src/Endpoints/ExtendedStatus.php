<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Endpoints;

use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;

class ExtendedStatus extends Data
{
    public function __construct(
        #[Required]
        public string $orderId,

        #[Required]
        public string $orderNumber,
    ) {}
}

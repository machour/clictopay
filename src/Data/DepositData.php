<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Data;

use Spatie\LaravelData\Attributes\Validation\Min;
use Spatie\LaravelData\Attributes\Validation\Numeric;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;

class DepositData extends Data
{
    public function __construct(
        #[Required]
        public string $orderId,

        #[Required, Numeric, Min(0)]
        public int $amount,
    ) {}
}

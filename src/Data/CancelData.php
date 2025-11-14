<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Data;

use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;

class CancelData extends Data
{
    public function __construct(
        #[Required]
        public string $orderId,
    ) {}
}

<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Data;

use Spatie\LaravelData\Attributes\Validation\Min;
use Spatie\LaravelData\Attributes\Validation\Numeric;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\Url;
use Spatie\LaravelData\Data;

class RegisterData extends Data
{
    public function __construct(
        #[Required]
        public string $orderNumber,

        #[Required, Numeric, Min(0)]
        public int $amount,

        #[Required, Url]
        public string $returnUrl,

        public ?string $failUrl = null,
        public ?string $description = null,
        public ?string $clientId = null,
        public ?array $jsonParams = null,
        public ?int $sessionTimeoutSecs = null,
        public ?string $bindingId = null,
    ) {}
}

# ClicToPay PHP SDK

<p align="center">
    <a href="https://clictopay.com.tn/" target="_blank">
        <img src="./ClicToPay.png" height="50" alt="ClicToPay">
    </a>
</p>

<p align="center">
    <a href="https://github.com/machour/clictopay/actions"><img src="https://github.com/machour/clictopay/workflows/Tests/badge.svg" alt="Tests"></a>
    <a href="https://packagist.org/packages/machour/clictopay"><img src="https://img.shields.io/packagist/dt/machour/clictopay" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/machour/clictopay"><img src="https://img.shields.io/packagist/v/machour/clictopay" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/machour/clictopay"><img src="https://img.shields.io/packagist/l/machour/clictopay" alt="License"></a>
</p>

A modern, type-safe PHP SDK for ClicToPay payment gateway integration. **Framework-agnostic** - works with any PHP 8.3+ project (Laravel, Symfony, WordPress, or vanilla PHP).

## Features

- ✅ **Framework-independent** - Uses Guzzle HTTP client
- ✅ **Type-safe** - Full type hints and return types using Spatie Laravel Data

## Installation

```shell
composer require machour/clictopay
```

## Requirements

- PHP 8.3 or higher
- Guzzle HTTP client (installed automatically)

## Quick Start

```php
use Machour\ClicToPay\Gateway;
use Machour\ClicToPay\Endpoints\Register;
use Machour\ClicToPay\Exception;

// Initialize the gateway
$gateway = Gateway::make(
    login: 'your-username',
    password: 'your-password',
    testMode: true  // Use false for production
);

try {
    // Create a payment
    $response = $gateway->register(Register::from([
        'orderNumber' => 'ORDER-123',
        'amount' => 10000,  // Amount in millimes (100 TND)
        'returnUrl' => 'https://yoursite.com/payment/success',
        'description' => 'Order #123',
    ]));
    
    if ($response->isOk()) {
        // Store $response->orderId in your database
        // Redirect customer to payment page
        header('Location: ' . $response->formUrl);
        exit;
    }
} catch (Exception $e) {
    echo "Payment error: " . $e->getMessage();
}
```

## Complete API Reference

### 1. Register Payment (Authorization)

Creates a new payment and returns a URL to redirect the customer to the payment page.

```php
use Machour\ClicToPay\Endpoints\Register;

$response = $gateway->register(Register::from([
    // Required fields
    'orderNumber' => 'ORDER-123',          // Your unique order number
    'amount' => 10000,                     // Amount in millimes (100 TND)
    'returnUrl' => 'https://example.com/success',
    
    // Optional fields
    'failUrl' => 'https://example.com/fail',
    'description' => 'Order description',
    'language' => 'fr',                    // 'fr' or 'en'
    'clientId' => 'client-123',
    'jsonParams' => ['email' => 'customer@example.com'],
    'sessionTimeoutSecs' => 1800,
    'bindingId' => 'binding-id',
]));

// Response: UrlResponse
echo $response->orderId;   // Store this in your database
echo $response->formUrl;   // Redirect customer here
```

### 2. Pre-Authorize Payment

Creates a pre-authorization that will need to be deposited later.

```php
use Machour\ClicToPay\Endpoints\PreAuthorize;

$response = $gateway->preAuthorize(PreAuthorize::from([
    'orderNumber' => 'ORDER-123',
    'amount' => 10000,
    'returnUrl' => 'https://example.com/success',
    // ... same optional fields as register
]));

// Response: UrlResponse
echo $response->orderId;
echo $response->formUrl;
```

### 3. Deposit (Capture Pre-Authorization)

Captures a previously pre-authorized payment.

```php
use Machour\ClicToPay\Endpoints\Deposit;

$response = $gateway->deposit(Deposit::from([
    'orderId' => '70906e55-7114-41d6-8332-4609dc6590f4',
    'amount' => 10000,  // Can be less than pre-authorized amount
]));

// Response: Response
if ($response->isOk()) {
    echo "Payment captured successfully";
}
```

### 4. Cancel (Reverse) Payment

Cancels a payment or pre-authorization.

```php
use Machour\ClicToPay\Endpoints\Cancel;

$response = $gateway->cancel(Cancel::from([
    'orderId' => '70906e55-7114-41d6-8332-4609dc6590f4',
]));

// Response: Response
if ($response->isOk()) {
    echo "Payment cancelled";
}
```

### 5. Refund Payment

Refunds a completed payment (partial or full).

```php
use Machour\ClicToPay\Endpoints\Refund;

$response = $gateway->refund(Refund::from([
    'orderId' => '70906e55-7114-41d6-8332-4609dc6590f4',
    'amount' => 5000,  // Refund amount (can be partial)
]));

// Response: Response
if ($response->isOk()) {
    echo "Refund processed";
}
```

### 6. Check Payment Status

Gets the current status of a payment.

```php
use Machour\ClicToPay\Endpoints\Status;

$response = $gateway->status(Status::from([
    'orderId' => '70906e55-7114-41d6-8332-4609dc6590f4',
]));

// Response: StatusResponse
echo $response->OrderStatus;      // 0=registered, 1=held, 2=authorized, etc.
echo $response->OrderNumber;      // Your order number
echo $response->Pan;              // Masked card number (411111**1111)
echo $response->amount;
echo $response->currency;
echo $response->approvalCode;
echo $response->cardholderName;
echo $response->expiration;
```

### 7. Extended Payment Status

Gets detailed payment status including 3D Secure information.

```php
use Machour\ClicToPay\Endpoints\ExtendedStatus;

$response = $gateway->extendedStatus(ExtendedStatus::from([
    'orderId' => '70906e55-7114-41d6-8332-4609dc6590f4',
    'orderNumber' => 'ORDER-123',
]));

// Response: ExtendedStatusResponse
echo $response->orderStatus;
echo $response->actionCode;
echo $response->actionCodeDescription;
echo $response->amount;
echo $response->currency;
echo $response->ip;
echo $response->orderDescription;
print_r($response->cardAuthInfo);      // Card and 3DS info
print_r($response->merchantOrderParams);
```

## HTTP Client Customization

The SDK uses [Guzzle](https://docs.guzzlephp.org/) as its HTTP client. You can customize the Guzzle instance with your own configuration:

### Custom Timeout

```php
use GuzzleHttp\Client;
use Machour\ClicToPay\Gateway;

$client = new Client([
    'timeout' => 30,           // Request timeout in seconds
    'connect_timeout' => 10,   // Connection timeout
]);

$gateway = new Gateway(
    login: 'username',
    password: 'password',
    endpoint: 'https://test.clictopay.com/payment/rest/',
    client: $client
);
```

### Using a Proxy

```php
$client = new Client([
    'proxy' => 'tcp://proxy.example.com:8080',
    'timeout' => 30,
]);

$gateway = new Gateway(
    login: 'username',
    password: 'password',
    endpoint: 'https://test.clictopay.com/payment/rest/',
    client: $client
);
```

### Logging Requests

```php
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Log\LoggerInterface;

$stack = HandlerStack::create();
$stack->push(Middleware::log($logger, new MessageFormatter()));

$client = new Client([
    'handler' => $stack,
]);

$gateway = new Gateway(
    login: 'username',
    password: 'password',
    endpoint: 'https://test.clictopay.com/payment/rest/',
    client: $client
);
```

For more Guzzle configuration options, see the [official Guzzle documentation](https://docs.guzzlephp.org/en/stable/request-options.html).

## Response Handling

All API methods return typed response objects with helper methods:

```php
$response = $gateway->register(/* ... */);

// Access properties with autocomplete
echo $response->orderId;
echo $response->formUrl;
```

## Error Handling

The SDK throws `Machour\ClicToPay\Exception` for all errors:

```php
use Machour\ClicToPay\Exception;

try {
    $response = $gateway->register(/* ... */);
} catch (Exception $e) {
    // ClicToPay API error (e.g., duplicate order number)
    // or HTTP communication error
    echo $e->getMessage();
}
```

## Testing

Run the test suite:

```bash
composer test
```

Run static analysis with PHPStan:

```bash
composer phpstan
```

Run tests with coverage:

```bash
composer test:coverage
```

## Framework Integration Examples

### Laravel

```php
// config/services.php
'clictopay' => [
    'username' => env('CLICTOPAY_USERNAME'),
    'password' => env('CLICTOPAY_PASSWORD'),
    'test_mode' => env('CLICTOPAY_TEST_MODE', true),
],

// In your controller
use Machour\ClicToPay\Gateway;

$gateway = Gateway::make(
    config('services.clictopay.username'),
    config('services.clictopay.password'),
    config('services.clictopay.test_mode')
);
```

### Symfony

```yaml
# config/services.yaml
parameters:
    clictopay.username: '%env(CLICTOPAY_USERNAME)%'
    clictopay.password: '%env(CLICTOPAY_PASSWORD)%'
    clictopay.test_mode: '%env(bool:CLICTOPAY_TEST_MODE)%'

services:
    Machour\ClicToPay\Gateway:
        factory: ['Machour\ClicToPay\Gateway', 'make']
        arguments:
            - '%clictopay.username%'
            - '%clictopay.password%'
            - '%clictopay.test_mode%'
```

### Vanilla PHP

```php
require 'vendor/autoload.php';

$gateway = Machour\ClicToPay\Gateway::make(
    $_ENV['CLICTOPAY_USERNAME'],
    $_ENV['CLICTOPAY_PASSWORD'],
    $_ENV['APP_ENV'] === 'development'
);
```

## License

BSD-3-Clause

## Links

* [Official ClicToPay Website](http://www.clictopay.com.tn/)
* [GitHub Repository](https://github.com/machour/clictopay)
* [Report Issues](https://github.com/machour/clictopay/issues)
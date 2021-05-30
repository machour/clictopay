# ClicToPay PHP SDK

<p align="center">
    <a href="http://clictopay.com.tn/" target="_blank">
        <img src="./ClicToPay.png" height="50" alt="ClicToPay">
    </a>
</p>

## Installation

```shell
composer require machour/clictopay
```

## Usage

```php
use Machour\ClicToPay\Gateway;
use Machour\ClicToPay\Exception;

$ctp = new Gateway('login', 'password');

try {
    $response = $ctp->register([
        'amount' => 10000,
        'orderNumber' => '123456',
        'description' => 'Pack Standard',
        'returnUrl' => 'https://example.com/success',
    ]);
    
    // store $response->orderId and then
    header('Location: ' . $response->formUrl);
    exit;
    
} catch (Exception $e) {
    
}
```

## API

```php
/**
 * Authorization request
 *
 * @param array $params
 * @return UrlResponse
 * @throws Exception
 */
public function register(array $params): UrlResponse

```

## See also

* [Official ClicToPay web site](http://www.clictopay.com.tn/)
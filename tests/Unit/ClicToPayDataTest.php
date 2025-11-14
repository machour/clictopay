<?php

declare(strict_types=1);

use Machour\ClicToPay\Endpoints\Cancel;
use Machour\ClicToPay\Endpoints\Deposit;
use Machour\ClicToPay\Endpoints\ExtendedStatus;
use Machour\ClicToPay\Endpoints\PreAuthorize;
use Machour\ClicToPay\Endpoints\Refund;
use Machour\ClicToPay\Endpoints\Register;
use Machour\ClicToPay\Endpoints\Status;
use Machour\ClicToPay\Exception;
use Machour\ClicToPay\Reponses\ExtendedStatusResponse;
use Machour\ClicToPay\Reponses\Response;
use Machour\ClicToPay\Reponses\StatusResponse;
use Machour\ClicToPay\Reponses\UrlResponse;
use Machour\ClicToPay\Tests\TestCase;
use Spatie\LaravelData\Exceptions\CannotCreateData;

uses(TestCase::class);

test('register data validates required fields', function () {
    expect(fn () => Register::from([
        'amount' => 100,
        'returnUrl' => 'https://example.com',
    ]))->toThrow(CannotCreateData::class);

    expect(fn () => Register::from([
        'orderNumber' => '12345',
        'returnUrl' => 'https://example.com',
    ]))->toThrow(CannotCreateData::class);

    expect(fn () => Register::from([
        'orderNumber' => '12345',
        'amount' => 100,
    ]))->toThrow(CannotCreateData::class);
});

test('register data creates successfully', function () {
    $data = Register::from([
        'orderNumber' => '12345',
        'amount' => 100,
        'returnUrl' => 'https://example.com',
    ]);

    expect($data->orderNumber)->toBe('12345')
        ->and($data->amount)->toBe(100)
        ->and($data->returnUrl)->toBe('https://example.com');
});

test('register data with optional fields', function () {
    $data = Register::from([
        'orderNumber' => '12345',
        'amount' => 100,
        'returnUrl' => 'https://example.com',
        'failUrl' => 'https://example.com/fail',
        'description' => 'Test order',
        'clientId' => 'client123',
        'jsonParams' => ['email' => 'test@example.com'],
        'sessionTimeoutSecs' => 1800,
        'bindingId' => 'binding123',
    ]);

    expect($data->failUrl)->toBe('https://example.com/fail')
        ->and($data->description)->toBe('Test order')
        ->and($data->clientId)->toBe('client123')
        ->and($data->jsonParams)->toBe(['email' => 'test@example.com'])
        ->and($data->sessionTimeoutSecs)->toBe(1800)
        ->and($data->bindingId)->toBe('binding123');
});

test('pre authorize data validates required fields', function () {
    expect(fn () => PreAuthorize::from([
        'amount' => 100,
        'returnUrl' => 'https://example.com',
    ]))->toThrow(CannotCreateData::class);
});

test('deposit data validates required fields', function () {
    expect(fn () => Deposit::from([
        'amount' => 100,
    ]))->toThrow(CannotCreateData::class);

    expect(fn () => Deposit::from([
        'orderId' => 'order123',
    ]))->toThrow(CannotCreateData::class);
});

test('deposit data creates successfully', function () {
    $data = Deposit::from([
        'orderId' => 'order123',
        'amount' => 100,
    ]);

    expect($data->orderId)->toBe('order123')
        ->and($data->amount)->toBe(100);
});

test('cancel data validates required fields', function () {
    expect(fn () => Cancel::from([]))
        ->toThrow(CannotCreateData::class);
});

test('cancel data creates successfully', function () {
    $data = Cancel::from(['orderId' => 'order123']);

    expect($data->orderId)->toBe('order123');
});

test('refund data validates required fields', function () {
    expect(fn () => Refund::from([
        'amount' => 100,
    ]))->toThrow(CannotCreateData::class);
});

test('refund data creates successfully', function () {
    $data = Refund::from([
        'orderId' => 'order123',
        'amount' => 500,
    ]);

    expect($data->orderId)->toBe('order123')
        ->and($data->amount)->toBe(500);
});

test('status data validates required fields', function () {
    expect(fn () => Status::from([]))
        ->toThrow(CannotCreateData::class);
});

test('status data creates successfully', function () {
    $data = Status::from(['orderId' => 'order123']);

    expect($data->orderId)->toBe('order123');
});

test('extended status data validates required fields', function () {
    expect(fn () => ExtendedStatus::from([
        'orderId' => 'order123',
    ]))->toThrow(CannotCreateData::class);

    expect(fn () => ExtendedStatus::from([
        'orderNumber' => '12345',
    ]))->toThrow(CannotCreateData::class);
});

test('extended status data creates successfully', function () {
    $data = ExtendedStatus::from([
        'orderId' => 'order123',
        'orderNumber' => '12345',
    ]);

    expect($data->orderId)->toBe('order123')
        ->and($data->orderNumber)->toBe('12345');
});

test('response data is ok when no error', function () {
    $response = new Response();

    expect($response->isOk())->toBeTrue();
});

test('response data is ok when error code zero', function () {
    $response = new Response(errorCode: 0);

    expect($response->isOk())->toBeTrue();
});

test('response data is not ok when error code present', function () {
    $response = new Response(errorMessage: 'Error', errorCode: 1);

    expect($response->isOk())->toBeFalse();
});

test('response data throws exception on error', function () {
    expect(fn () => Response::from([
        'errorCode' => 1,
        'errorMessage' => 'Test error',
    ]))->toThrow(Exception::class, 'Test error');
});

test('response data succeeds on ok', function () {
    $response = Response::from([
        'errorCode' => 0,
    ]);

    expect($response->isOk())->toBeTrue();
});

test('url response data creates successfully', function () {
    $response = UrlResponse::from([
        'orderId' => 'order123',
        'formUrl' => 'https://test.clictopay.com/payment/form',
        'errorCode' => 0,
    ]);

    expect($response->orderId)->toBe('order123')
        ->and($response->formUrl)->toBe('https://test.clictopay.com/payment/form')
        ->and($response->isOk())->toBeTrue();
});

test('status response data creates successfully', function () {
    $response = StatusResponse::from([
        'OrderStatus' => 2,
        'OrderNumber' => '12345',
        'Pan' => '411111**1111',
        'expiration' => '201512',
        'cardholderName' => 'John Doe',
        'amount' => 100,
        'currency' => '788',
        'approvalCode' => '123456',
        'authCode' => 2,
        'ip' => '127.0.0.1',
        'errorCode' => 0,
    ]);

    expect($response->OrderStatus)->toBe(2)
        ->and($response->OrderNumber)->toBe('12345')
        ->and($response->Pan)->toBe('411111**1111')
        ->and($response->isOk())->toBeTrue();
});

test('extended status response data creates successfully', function () {
    $response = ExtendedStatusResponse::from([
        'orderNumber' => '12345',
        'orderStatus' => 2,
        'actionCode' => 0,
        'actionCodeDescription' => 'Success',
        'amount' => 100,
        'currency' => '788',
        'date' => 1342007119386,
        'ip' => '127.0.0.1',
        'errorCode' => 0,
    ]);

    expect($response->orderNumber)->toBe('12345')
        ->and($response->orderStatus)->toBe(2)
        ->and($response->actionCode)->toBe(0)
        ->and($response->isOk())->toBeTrue();
});

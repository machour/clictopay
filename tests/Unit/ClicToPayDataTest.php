<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Tests\Unit;

use Illuminate\Foundation\Testing\TestCase;
use Machour\ClicToPay\Data\CancelData;
use Machour\ClicToPay\Data\DepositData;
use Machour\ClicToPay\Data\ExtendedStatusData;
use Machour\ClicToPay\Data\ExtendedStatusResponseData;
use Machour\ClicToPay\Data\PreAuthorizeData;
use Machour\ClicToPay\Data\RefundData;
use Machour\ClicToPay\Data\RegisterData;
use Machour\ClicToPay\Data\ResponseData;
use Machour\ClicToPay\Data\StatusData;
use Machour\ClicToPay\Data\StatusResponseData;
use Machour\ClicToPay\Data\UrlResponseData;
use Machour\ClicToPay\Exception;
use Spatie\LaravelData\Exceptions\CannotCreateData;

class ClicToPayDataTest extends TestCase
{
    public function test_register_data_validates_required_fields(): void
    {
        expect(fn () => RegisterData::from([
            'amount' => 100,
            'returnUrl' => 'https://example.com',
        ]))->toThrow(CannotCreateData::class);

        expect(fn () => RegisterData::from([
            'orderNumber' => '12345',
            'returnUrl' => 'https://example.com',
        ]))->toThrow(CannotCreateData::class);

        expect(fn () => RegisterData::from([
            'orderNumber' => '12345',
            'amount' => 100,
        ]))->toThrow(CannotCreateData::class);
    }


    public function test_register_data_creates_successfully(): void
    {
        $data = RegisterData::from([
            'orderNumber' => '12345',
            'amount' => 100,
            'returnUrl' => 'https://example.com',
        ]);

        expect($data->orderNumber)->toBe('12345')
            ->and($data->amount)->toBe(100)
            ->and($data->returnUrl)->toBe('https://example.com');
    }

    public function test_register_data_with_optional_fields(): void
    {
        $data = RegisterData::from([
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
    }

    public function test_pre_authorize_data_validates_required_fields(): void
    {
        expect(fn () => PreAuthorizeData::from([
            'amount' => 100,
            'returnUrl' => 'https://example.com',
        ]))->toThrow(CannotCreateData::class);
    }

    public function test_deposit_data_validates_required_fields(): void
    {
        expect(fn () => DepositData::from([
            'amount' => 100,
        ]))->toThrow(CannotCreateData::class);

        expect(fn () => DepositData::from([
            'orderId' => 'order123',
        ]))->toThrow(CannotCreateData::class);
    }

    public function test_deposit_data_creates_successfully(): void
    {
        $data = DepositData::from([
            'orderId' => 'order123',
            'amount' => 100,
        ]);

        expect($data->orderId)->toBe('order123')
            ->and($data->amount)->toBe(100);
    }

    public function test_cancel_data_validates_required_fields(): void
    {
        expect(fn () => CancelData::from([]))
            ->toThrow(CannotCreateData::class);
    }

    public function test_cancel_data_creates_successfully(): void
    {
        $data = CancelData::from(['orderId' => 'order123']);

        expect($data->orderId)->toBe('order123');
    }

    public function test_refund_data_validates_required_fields(): void
    {
        expect(fn () => RefundData::from([
            'amount' => 100,
        ]))->toThrow(CannotCreateData::class);
    }

    public function test_refund_data_creates_successfully(): void
    {
        $data = RefundData::from([
            'orderId' => 'order123',
            'amount' => 500,
        ]);

        expect($data->orderId)->toBe('order123')
            ->and($data->amount)->toBe(500);
    }

    public function test_status_data_validates_required_fields(): void
    {
        expect(fn () => StatusData::from([]))
            ->toThrow(CannotCreateData::class);
    }

    public function test_status_data_creates_successfully(): void
    {
        $data = StatusData::from(['orderId' => 'order123']);

        expect($data->orderId)->toBe('order123');
    }

    public function test_extended_status_data_validates_required_fields(): void
    {
        expect(fn () => ExtendedStatusData::from([
            'orderId' => 'order123',
        ]))->toThrow(CannotCreateData::class);

        expect(fn () => ExtendedStatusData::from([
            'orderNumber' => '12345',
        ]))->toThrow(CannotCreateData::class);
    }

    public function test_extended_status_data_creates_successfully(): void
    {
        $data = ExtendedStatusData::from([
            'orderId' => 'order123',
            'orderNumber' => '12345',
        ]);

        expect($data->orderId)->toBe('order123')
            ->and($data->orderNumber)->toBe('12345');
    }

    public function test_response_data_is_ok_when_no_error(): void
    {
        $response = new ResponseData();

        expect($response->isOk())->toBeTrue();
    }

    public function test_response_data_is_ok_when_error_code_zero(): void
    {
        $response = new ResponseData(errorCode: 0);

        expect($response->isOk())->toBeTrue();
    }

    public function test_response_data_is_not_ok_when_error_code_present(): void
    {
        $response = new ResponseData(errorMessage: 'Error', errorCode: 1);

        expect($response->isOk())->toBeFalse();
    }

    public function test_response_data_throws_exception_on_error(): void
    {
        expect(fn () => ResponseData::from([
            'errorCode' => 1,
            'errorMessage' => 'Test error',
        ]))->toThrow(Exception::class, 'Test error');
    }

    public function test_response_data_succeeds_on_ok(): void
    {
        $response = ResponseData::from([
            'errorCode' => 0,
        ]);

        expect($response->isOk())->toBeTrue();
    }

    public function test_url_response_data_creates_successfully(): void
    {
        $response = UrlResponseData::from([
            'orderId' => 'order123',
            'formUrl' => 'https://test.clictopay.com/payment/form',
            'errorCode' => 0,
        ]);

        expect($response->orderId)->toBe('order123')
            ->and($response->formUrl)->toBe('https://test.clictopay.com/payment/form')
            ->and($response->isOk())->toBeTrue();
    }

    public function test_status_response_data_creates_successfully(): void
    {
        $response = StatusResponseData::from([
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
    }

    public function test_extended_status_response_data_creates_successfully(): void
    {
        $response = ExtendedStatusResponseData::from([
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
    }
}

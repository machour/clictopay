<?php

declare(strict_types=1);

namespace Machour\ClicToPay\Tests\Unit;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Machour\ClicToPay\Gateway;
use Machour\ClicToPay\Endpoints\Cancel;
use Machour\ClicToPay\Endpoints\Deposit;
use Machour\ClicToPay\Endpoints\ExtendedStatus;
use Machour\ClicToPay\Endpoints\PreAuthorize;
use Machour\ClicToPay\Endpoints\Refund;
use Machour\ClicToPay\Endpoints\Register;
use Machour\ClicToPay\Endpoints\Status;
use Machour\ClicToPay\Exception;
use Machour\ClicToPay\Tests\TestCase;

class GatewayTest extends TestCase
{
    private Gateway $gateway;
    private MockHandler $mockHandler;

    protected function setUp(): void
    {
        parent::setUp();
        $this->mockHandler = new MockHandler();
        $handlerStack = HandlerStack::create($this->mockHandler);
        $client = new Client(['handler' => $handlerStack]);
        $this->gateway = new Gateway('userName', 'password', 'https://test.clictopay.com/payment/rest/', $client);
    }
    
    private function mockResponse(array $data, int $status = 200): void
    {
        $this->mockHandler->append(new GuzzleResponse($status, [], json_encode($data)));
    }

    public function test_make_creates_gateway_with_test_endpoint(): void
    {
        $gateway = Gateway::make('login', 'password', true);

        expect($gateway->login)->toBe('login')
            ->and($gateway->password)->toBe('password')
            ->and($gateway->endpoint)->toBe('https://test.clictopay.com/payment/rest/');
    }

    public function test_make_creates_gateway_with_production_endpoint(): void
    {
        $gateway = Gateway::make('login', 'password', false);

        expect($gateway->endpoint)->toBe('https://ipay.clictopay.com/payment/rest/');
    }

    public function test_register_success(): void
    {
        $this->mockResponse([
            'orderId' => '70906e55-7114-41d6-8332-4609dc6590f4',
            'formUrl' => 'https://test.clictopay.com/payment/merchants/test/mobile_payment_en.html?mdOrder=70906e55-7114-41d6-8332-4609dc6590f4',
        ]);

        $response = $this->gateway->register(Register::from([
            'orderNumber' => '87654321',
            'amount' => 100,
            'returnUrl' => 'https://example.com/finish.html',
        ]));

        expect($response->orderId)->toBe('70906e55-7114-41d6-8332-4609dc6590f4')
            ->and($response->formUrl)->toContain('mobile_payment_en.html')
            ->and($response->isOk())->toBeTrue();
    }

    public function test_register_with_optional_parameters(): void
    {
        $this->mockResponse([
            'orderId' => '70906e55-7114-41d6-8332-4609dc6590f4',
            'formUrl' => 'https://test.clictopay.com/payment/merchants/test/payment_en.html',
        ]);

        $response = $this->gateway->register(Register::from([
            'orderNumber' => '87654321',
            'amount' => 100,
            'returnUrl' => 'https://example.com/finish.html',
            'failUrl' => 'https://example.com/fail.html',
            'description' => 'Test order',
            'clientId' => 'client123',
            'jsonParams' => ['email' => 'test@example.com'],
            'sessionTimeoutSecs' => 1800,
        ]));

        expect($response->isOk())->toBeTrue();
    }

    public function test_register_throws_exception_on_error(): void
    {
        $this->mockResponse([
            'errorCode' => 1,
            'errorMessage' => 'Commander avec ce numéro a déjà été traité.',
        ]);

        expect(fn () => $this->gateway->register(Register::from([
            'orderNumber' => '87654321',
            'amount' => 100,
            'returnUrl' => 'https://example.com/finish.html',
        ])))->toThrow(Exception::class, 'Commander avec ce numéro a déjà été traité.');
    }

    public function test_pre_authorize_success(): void
    {
        $this->mockResponse([
            'orderId' => '61351fbd-ac25-484f-b930-4d0ce4101ab7',
            'formUrl' => 'https://test.clictopay.com/payment/merchants/merchant-name/mobile_payment_en.html?mdOrder=61351fbd-ac25-484f-b930-4d0ce4101ab7',
        ]);

        $response = $this->gateway->preAuthorize(PreAuthorize::from([
            'orderNumber' => '87654321',
            'amount' => 100,
            'returnUrl' => 'https://example.com/finish.html',
        ]));

        expect($response->orderId)->toBe('61351fbd-ac25-484f-b930-4d0ce4101ab7')
            ->and($response->formUrl)->toContain('mobile_payment_en.html')
            ->and($response->isOk())->toBeTrue();
    }

    public function test_deposit_success(): void
    {
        $this->mockResponse([
            'errorCode' => 0,
        ]);

        $response = $this->gateway->deposit(Deposit::from([
            'orderId' => 'e5b59d3d-746b-4828-9da4-06f126e01b68',
            'amount' => 100,
        ]));

        expect($response->isOk())->toBeTrue()
            ->and($response->errorCode)->toBe(0);
    }

    public function test_cancel_success(): void
    {
        $this->mockResponse([
            'errorCode' => 0,
            'errorMessage' => 'Success',
        ]);

        $response = $this->gateway->cancel(Cancel::from([
            'orderId' => '80c45f2e-8db4-4d20-9324-5b784a1fd8c3',
        ]));

        expect($response->isOk())->toBeTrue()
            ->and($response->errorMessage)->toBe('Success');
    }

    public function test_refund_success(): void
    {
        $this->mockResponse([
            'errorCode' => 0,
        ]);

        $response = $this->gateway->refund(Refund::from([
            'orderId' => '5e97e3fd-1d20-4b4b-a542-f5995f5e8208',
            'amount' => 500,
        ]));

        expect($response->isOk())->toBeTrue();
    }

    public function test_status_success(): void
    {
        $this->mockResponse([
            'expiration' => '201512',
            'cardholderName' => 'trtr',
            'depositAmount' => 789789,
            'currency' => '788',
            'approvalCode' => '123456',
            'authCode' => 2,
            'clientId' => '666',
            'bindingId' => '07a90a5d-cc60-4d1b-a9e6-ffd15974a74f',
            'errorCode' => 0,
            'errorMessage' => 'Success',
            'OrderStatus' => 2,
            'OrderNumber' => '23asdafaf',
            'Pan' => '411111**1111',
            'amount' => 789789,
        ]);

        $response = $this->gateway->status(Status::from([
            'orderId' => 'b8d70aa7-bfb3-4f94-b7bb-aec7273e1fce',
        ]));

        expect($response->isOk())->toBeTrue()
            ->and($response->OrderStatus)->toBe(2)
            ->and($response->OrderNumber)->toBe('23asdafaf')
            ->and($response->Pan)->toBe('411111**1111')
            ->and($response->expiration)->toBe('201512')
            ->and($response->cardholderName)->toBe('trtr')
            ->and($response->amount)->toBe(789789)
            ->and($response->currency)->toBe('788')
            ->and($response->approvalCode)->toBe('123456')
            ->and($response->authCode)->toBe(2)
            ->and($response->clientId)->toBe('666')
            ->and($response->bindingId)->toBe('07a90a5d-cc60-4d1b-a9e6-ffd15974a74f');
    }

    public function test_extended_status_success(): void
    {
        $this->mockResponse([
            'attributes' => [],
            'date' => 1342007119386,
            'currency' => '788',
            'amount' => 100,
            'actionCode' => 0,
            'orderNumber' => '1212x31334z15',
            'orderDescription' => 'test',
            'orderStatus' => 2,
            'ip' => '217.12.97.50',
            'actionCodeDescription' => 'The payment processed successfully',
            'merchantOrderParams' => [],
            'cardAuthInfo' => [
                'expiration' => '201512',
                'pan' => '411111**1111',
                'approvalCode' => '123456',
                'cardholderName' => 'dsdqdqd',
                'secureAuthInfo' => [
                    'eci' => 5,
                    'threeDSInfo' => [
                        'cavv' => 'AAABCpEAUBNCAHEgBQAAAAAAAAA=',
                        'xid' => 'MDAwMDAwMDEzNDIwMDcxMTk3Njc=',
                    ],
                ],
            ],
        ]);

        $response = $this->gateway->extendedStatus(ExtendedStatus::from([
            'orderId' => '285b2973-4d02-4980-a54e-57c4d0d2xxx9',
            'orderNumber' => '1212x31334z15',
        ]));

        expect($response->isOk())->toBeTrue()
            ->and($response->orderNumber)->toBe('1212x31334z15')
            ->and($response->orderStatus)->toBe(2)
            ->and($response->actionCode)->toBe(0)
            ->and($response->actionCodeDescription)->toBe('The payment processed successfully')
            ->and($response->amount)->toBe(100)
            ->and($response->currency)->toBe('788')
            ->and($response->ip)->toBe('217.12.97.50')
            ->and($response->orderDescription)->toBe('test')
            ->and($response->cardAuthInfo)->toBeArray()
            ->and($response->cardAuthInfo['pan'])->toBe('411111**1111');
    }

    public function test_http_exception_is_wrapped(): void
    {
        $this->mockHandler->append(
            new RequestException(
                'Server error',
                new Request('GET', 'test'),
                new GuzzleResponse(500)
            )
        );

        expect(fn () => $this->gateway->register(Register::from([
            'orderNumber' => '87654321',
            'amount' => 100,
            'returnUrl' => 'https://example.com/finish.html',
        ])))->toThrow(Exception::class, 'Erreur lors de la communication avec le serveur de paiement ClicToPay');
    }
}

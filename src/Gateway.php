<?php

declare(strict_types=1);

namespace Machour\ClicToPay;

use Machour\ClicToPay\Response\ExtendedStatusResponse;
use Machour\ClicToPay\Response\Response;
use Machour\ClicToPay\Response\StatusResponse;
use Machour\ClicToPay\Response\UrlResponse;

class Gateway
{
    private $login;
    private $password;
    private $endpoint;

    public function __construct($login, $password, $testMode = false)
    {
        $this->login = $login;
        $this->password = $password;
        $this->endpoint = 'https://' . ($testMode ? 'test' : 'ipay') . '.clictopay.com/payment/rest/';
    }

    /**
     * Authorization request
     *
     * @param array $params
     * @return UrlResponse
     * @throws Exception
     */
    public function register(array $params): UrlResponse
    {
        $this->assertParams(['orderNumber', 'amount', 'returnUrl'], $params);

        return $this->callApi('register.do', $params, UrlResponse::class);
    }

    /**
     * @param array $params
     * @return UrlResponse
     * @throws Exception
     */
    public function preAuthorize(array $params): UrlResponse
    {
        $this->assertParams(['amount', 'orderNumber'], $params);

        return $this->callApi('registerPreAuth.do', $params, UrlResponse::class);
    }

    /**
     * @param array $params
     * @return Response
     * @throws Exception
     */
    public function deposit(array $params): Response
    {
        $this->assertParams(['amount', 'orderNumber'], $params);

        return $this->callApi('deposit.do', $params, Response::class);
    }

    /**
     * @param array $params
     * @return Response
     * @throws Exception
     */
    public function cancel(array $params): Response
    {
        $this->assertParams(['orderId'], $params);

        return $this->callApi('reverse.do', $params, Response::class);
    }


    /**
     * @param array $params
     * @return Response
     * @throws Exception
     */
    public function refund(array $params): Response
    {
        $this->assertParams(['orderId', 'amount'], $params);

        return $this->callApi('refund.do', $params, Response::class);
    }


    /**
     * @param array $params
     * @return StatusResponse
     * @throws Exception
     */
    public function status(array $params): StatusResponse
    {
        $this->assertParams(['orderId'], $params);

        return $this->callApi('getOrderStatus.do', $params, StatusResponse::class);
    }

    /**
     * @param array $params
     * @return ExtendedStatusResponse
     * @throws Exception
     */
    public function extendedStatus(array $params): ExtendedStatusResponse
    {
        $this->assertParams(['orderId', 'orderNumber'], $params);

        return $this->callApi('getOrderStatusExtended.do', $params, ExtendedStatusResponse::class);
    }


    /**
     * @param string $query
     * @param array $params
     * @param string $response
     *
     * @noinspection PhpReturnDocTypeMismatchInspection
     * @return Response|UrlResponse|StatusResponse|ExtendedStatusResponse
     * @throws Exception
     */
    private function callApi(string $query, array $params, string $response)
    {
        $params = array_merge([
            'userName' => $this->login,
            'password' => $this->password,
            'language' => 'fr',
            'currency' => 788,
        ], $params);

        $data = file_get_contents($this->endpoint . $query . '?' . http_build_query($params));

        /** @var Response $response */
        $response = new $response($data);
        if (!$response->isOk()) {
            throw new Exception($response->errorMessage, (int)$response->errorCode);
        }

        return $response;
    }

    /**
     * @param array $required
     * @param array $params
     * @throws Exception
     */
    private function assertParams(array $required, array $params)
    {
        foreach ($required as $key) {
            if (!array_key_exists($key, $params)) {
                throw new Exception("You must provide the `$key` parameter.");
            }
        }
    }
}


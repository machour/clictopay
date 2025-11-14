<?php

namespace Machour\ClicToPay;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Machour\ClicToPay\Endpoints\Cancel;
use Machour\ClicToPay\Endpoints\Deposit;
use Machour\ClicToPay\Endpoints\ExtendedStatus;
use Machour\ClicToPay\Endpoints\PreAuthorize;
use Machour\ClicToPay\Endpoints\Refund;
use Machour\ClicToPay\Endpoints\Register;
use Machour\ClicToPay\Endpoints\Status;
use Machour\ClicToPay\Reponses\ExtendedStatusResponse;
use Machour\ClicToPay\Reponses\Response;
use Machour\ClicToPay\Reponses\StatusResponse;
use Machour\ClicToPay\Reponses\UrlResponse;
use Spatie\LaravelData\Data;

class Gateway
{
    private Client $client;

    public function __construct(
        public string $login,
        public string $password,
        public string $endpoint,
        ?Client $client = null,
    ) {
        $this->client = $client ?? new Client();
    }

    public static function make(string $login, string $password, bool $testMode = false): self
    {
        $endpoint = 'https://' . ($testMode ? 'test' : 'ipay') . '.clictopay.com/payment/rest/';

        return new self($login, $password, $endpoint);
    }

    /**
     * @throws Exception
     */
    public function register(Register $data): UrlResponse
    {
        return UrlResponse::from($this->callApi('register.do', $data));
    }

    /**
     * @throws Exception
     */
    public function preAuthorize(PreAuthorize $data): UrlResponse
    {
        return UrlResponse::from($this->callApi('registerPreAuth.do', $data));
    }

    /**
     * @throws Exception
     */
    public function deposit(Deposit $data): Response
    {
        return Response::from($this->callApi('deposit.do', $data));
    }

    /**
     * @throws Exception
     */
    public function cancel(Cancel $data): Response
    {
        return Response::from($this->callApi('reverse.do', $data));
    }

    /**
     * @throws Exception
     */
    public function refund(Refund $data): Response
    {
        return Response::from($this->callApi('refund.do', $data));
    }

    /**
     * @throws Exception
     */
    public function status(Status $data): StatusResponse
    {
        return StatusResponse::from($this->callApi('getOrderStatus.do', $data));
    }

    /**
     * @throws Exception
     */
    public function extendedStatus(ExtendedStatus $data): ExtendedStatusResponse
    {
        return ExtendedStatusResponse::from($this->callApi('getOrderStatusExtended.do', $data));
    }

    /**
     * @throws \Machour\ClicToPay\Exception
     */
    private function callApi(string $query, Data $requestData): array
    {
        $params = [
            'userName' => $this->login,
            'password' => $this->password,
            'language' => 'fr',
            'currency' => 788,
            ...$requestData->toArray(),
        ];

        try {
            $response = $this->client->get($this->endpoint . $query, [
                'query' => $params,
            ]);
            
            $data = json_decode($response->getBody()->getContents(), true);

            if ($data === null) {
                throw new \Exception('Invalid response from payment gateway');
            }

            return $data;
        } catch (GuzzleException $e) {
            throw new Exception('Erreur lors de la communication avec le serveur de paiement ClicToPay: ' . $e->getMessage());
        }
    }
}

<?php

namespace Machour\ClicToPay;

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
use Illuminate\Support\Facades\Http;
use Spatie\LaravelData\Data;

class Gateway
{
    public function __construct(
        public string $login,
        public string $password,
        public string $endpoint,
    ) {}

    public static function make(string $login, string $password, bool $testMode = false): self
    {
        $endpoint = 'https://' . ($testMode ? 'test' : 'ipay') . '.clictopay.com/payment/rest/';

        return new self($login, $password, $endpoint);
    }

    /**
     * @throws Exception
     */
    public function register(RegisterData $data): UrlResponseData
    {
        return UrlResponseData::from($this->callApi('register.do', $data));
    }

    /**
     * @throws Exception
     */
    public function preAuthorize(PreAuthorizeData $data): UrlResponseData
    {
        return UrlResponseData::from($this->callApi('registerPreAuth.do', $data));
    }

    /**
     * @throws Exception
     */
    public function deposit(DepositData $data): ResponseData
    {
        return ResponseData::from($this->callApi('deposit.do', $data));
    }

    /**
     * @throws Exception
     */
    public function cancel(CancelData $data): ResponseData
    {
        return ResponseData::from($this->callApi('reverse.do', $data));
    }

    /**
     * @throws Exception
     */
    public function refund(RefundData $data): ResponseData
    {
        return ResponseData::from($this->callApi('refund.do', $data));
    }

    /**
     * @throws Exception
     */
    public function status(StatusData $data): StatusResponseData
    {
        return StatusResponseData::from($this->callApi('getOrderStatus.do', $data));
    }

    /**
     * @throws Exception
     */
    public function extendedStatus(ExtendedStatusData $data): ExtendedStatusResponseData
    {
        return ExtendedStatusResponseData::from($this->callApi('getOrderStatusExtended.do', $data));
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
            $rawResponse = Http::get($this->endpoint . $query, $params);
            $data = $rawResponse->json();

            if ($data === null) {
                throw new \Exception('Invalid response from payment gateway');
            }

            return $data;
        } catch (\Exception $e) {
            throw new Exception('Erreur lors de la communication avec le serveur de paiement ClicToPay: ' . $e->getMessage());
        }
    }
}

<?php


namespace TNM\OCS\ChangePrimaryOffer;

use TNM\OCS\Services\ChangePrimaryOfferService;

class ChangePrimaryOfferClient
{
    private $service;
    /**
     * ChangePrimaryOfferClient constructor.
     * @param string $phoneNumber
     * @param string $newPlanId
     * @param string $transactionId
     * @param string $description
     * @throws \SoapFault
     */
    public function __construct(string $phoneNumber, string $newPlanId, string $transactionId, string $description)
    {
        $this->service = new ChangePrimaryOfferService(
            new ChangePrimaryOfferRequest(
                new ChangePrimaryOfferRequestHeader($transactionId, $description),
                new ChangePrimaryOffer($phoneNumber, $newPlanId)
            )
        );
    }

    public function query(): ChangePrimaryOfferResponse
    {
        return $this->service->query();
    }
}

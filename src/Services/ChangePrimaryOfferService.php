<?php


namespace TNM\OCS\Services;


use TNM\OCS\Arrayable;
use TNM\OCS\ChangePrimaryOffer\ChangePrimaryOfferRequest;
use TNM\OCS\ChangePrimaryOffer\ChangePrimaryOfferResponse;

class ChangePrimaryOfferService extends \SoapClient
{
    use Arrayable;
    /**
     * @var ChangePrimaryOfferRequest
     */
    private $request;

    public function __construct(ChangePrimaryOfferRequest $request, array $options = [])
    {
        parent::__construct($this->getWsdl(), $options);
        $this->request = $request;
    }

    public function query(): ChangePrimaryOfferResponse
    {
        try {
            $response = $this->toArray($this->__soapCall('changePrimaryOffer', $this->request->__toArray()));
            return new ChangePrimaryOfferResponse($response['ResultHeader']);
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function getWsdl(): string
    {
        return config('ocs.base_url') . config('ocs.change_primary_offer');
    }
}

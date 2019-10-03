<?php


namespace TNM\OCS\ChangePrimaryOffer;


use TNM\OCS\OcsRequest;

class ChangePrimaryOfferRequest
{
    use OcsRequest;
    /**
     * @var ChangePrimaryOfferRequestHeader
     */
    private $header;
    /**
     * @var ChangePrimaryOffer
     */
    private $query;

    public function __construct(ChangePrimaryOfferRequestHeader $header, ChangePrimaryOffer $query)
    {
        $this->header = $header;
        $this->query = $query;
    }

    public function get()
    {
        return $this->prepareAttributes([
            "RequestHeader" => $this->header->get(),
            "ChangePrimaryOfferRequest" => $this->query->get()
        ]);
    }

    public function __toArray()
    {
        return [$this->get()];
    }
}
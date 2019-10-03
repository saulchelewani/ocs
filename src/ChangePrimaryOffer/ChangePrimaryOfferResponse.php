<?php


namespace TNM\OCS\ChangePrimaryOffer;


use TNM\OCS\ResultHeader;

class ChangePrimaryOfferResponse
{
    /**
     * @var array
     */
    private $responseHeader;

    public function __construct(array $responseHeader)
    {
        $this->responseHeader = $responseHeader;
    }

    public function getResultHeader(): ResultHeader
    {
        return new ResultHeader($this->responseHeader);
    }
}
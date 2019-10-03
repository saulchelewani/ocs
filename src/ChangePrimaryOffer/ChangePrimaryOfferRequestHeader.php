<?php


namespace TNM\OCS\ChangePrimaryOffer;


use TNM\OCS\CommandType;
use TNM\OCS\RequestHeader;

class ChangePrimaryOfferRequestHeader extends RequestHeader
{
    public function __construct($transactionId, $description)
    {
        parent::__construct($transactionId, $description, CommandType::SWITCH_SUBSCRIBER_PLAN);
    }

}
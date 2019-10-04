<?php


namespace TNM\OCS\QueryCustomer;


use TNM\OCS\CommandType;
use TNM\OCS\RequestHeader;

class QueryCustomerRequestHeader extends RequestHeader
{
    public function __construct($transactionId, $description)
    {
        parent::__construct($transactionId, $description, CommandType::SUBSCRIBER_PLAN);
    }
}
<?php


namespace TNM\OCS\QueryCustomer;


use TNM\OCS\OcsRequest;

class QueryCustomer
{
    use OcsRequest;

    private $phoneNumber;

    public function __construct($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function get()
    {
        return $this->prepareAttributes([
            "SubscriberNo" => $this->phoneNumber,
            "QueryType" => 0,
            "CustomerMask" => "01"
        ]);
    }
}
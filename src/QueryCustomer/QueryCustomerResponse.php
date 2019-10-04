<?php


namespace TNM\OCS\QueryCustomer;


use TNM\OCS\ResultHeader;

class QueryCustomerResponse
{
    /**
     * @var array
     */
    private $responseHeader;
    /**
     * @var array
     */
    private $customerDetails;

    public function __construct(array $responseHeader, array $customerDetails)
    {
        $this->responseHeader = $responseHeader;
        $this->customerDetails = $customerDetails;
    }

    public function getResultHeader(): ResultHeader
    {
        return new ResultHeader($this->responseHeader);
    }

    public function getCustomer()
    {
        
    }

    public function getSubscriber(): Subscriber
    {
        return new Subscriber($this->customerDetails['Subscriber']);
    }

    public function getAccount()
    {
        
    }
}
<?php


namespace TNM\OCS\QueryCustomer;


use TNM\OCS\Services\QueryCustomerService;

class QueryCustomerClient
{
    /**
     * @var QueryCustomerService
     */
    private $service;

    /**
     * QueryCustomerClient constructor.
     * @param int $phoneNumber
     * @param string $transactionId
     * @param string $description
     * @throws \SoapFault
     */
    public function __construct(int $phoneNumber, string $transactionId, string $description)
    {
        $this->service = new QueryCustomerService(
            new QueryCustomerRequest(
                new QueryCustomerRequestHeader($transactionId, $description),
                new QueryCustomer($phoneNumber)
            )
        );
    }

    public function query(): QueryCustomerResponse
    {
        return $this->service->query();
    }

}

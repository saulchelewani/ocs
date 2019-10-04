<?php


namespace TNM\OCS\QueryCustomer;


use TNM\OCS\OcsRequest;

class QueryCustomerRequest
{
    use OcsRequest;

    /**
     * @var QueryCustomerRequestHeader
     */
    private $header;
    /**
     * @var QueryCustomer
     */
    private $queryCustomer;

    public function __construct(QueryCustomerRequestHeader $header, QueryCustomer $queryCustomer)
    {
        $this->header = $header;
        $this->queryCustomer = $queryCustomer;
    }

    public function get()
    {
        return $this->prepareAttributes([
            "RequestHeader" => $this->header->get(),
            "QueryCustomerRequest" => $this->queryCustomer->get()
        ]);
    }

    public function __toArray()
    {
        return [$this->get()];
    }
}
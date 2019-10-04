<?php


namespace TNM\OCS\Services;


use TNM\OCS\Arrayable;
use TNM\OCS\QueryCustomer\QueryCustomerRequest;
use TNM\OCS\QueryCustomer\QueryCustomerResponse;

class QueryCustomerService extends \SoapClient
{
    use Arrayable;
    /**
     * @var QueryCustomerRequest
     */
    private $request;

    public function __construct(QueryCustomerRequest $request, array $options = ["trace" => true])
    {
        parent::__construct($this->getWsdl(), $options);
        $this->request = $request;
    }

    public function query()
    {
        try {
            $response = $this->toArray($this->__soapCall('queryCustomer', $this->request->__toArray()));
            return new QueryCustomerResponse($response['ResultHeader'], $response['QueryCustomerResult']);
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function getWsdl(): string
    {
        return config('ocs.base_url') . config('ocs.query_customer');
    }
}

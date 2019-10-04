<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use TNM\OCS\QueryCustomer\QueryCustomerClient;

class QueryCustomerClientTest extends TestCase
{
    private $phoneNumber = '888257571';

    /**
     * @throws \SoapFault
     */
    public function test_can_check_customer_details_successfully()
    {
        $client = new QueryCustomerClient($this->phoneNumber, 'testTransactionCode', 'testDescription');
        dd($client);

        $this->assertTrue($client->query()->getResultHeader()->isSuccessful());
    }
}

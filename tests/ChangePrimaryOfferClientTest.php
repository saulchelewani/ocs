<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use TNM\OCS\ChangePrimaryOffer\ChangePrimaryOfferClient;

class ChangePrimaryOfferClientTest extends TestCase
{
    private $phoneNumber = '888257571';
    private $testRatePlan = 23;
    private $testWsdl = 'http://172.18.40.36:7781/services/ChangePrimaryOfferMgrService?wsdl';

    /**
     * @throws \SoapFault
     */
    public function test_can_change_rate_plan_successfully()
    {
//        $params = new ChangePrimaryOfferParams(
//            $this->phoneNumber,
//            $this->testRatePlan,
//            'TestTransaction',
//            'test-transaction-description');
        $client = new ChangePrimaryOfferClient(
            $this->phoneNumber,
            $this->testRatePlan,
            'testTransactionId',
            'testTransactionDescription'
        );

        $this->assertTrue($client->query()->getResultHeader()->isSuccessful());
    }
}

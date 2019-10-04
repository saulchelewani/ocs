<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use TNM\OCS\ChangePrimaryOffer\ChangePrimaryOfferClient;

class ChangePrimaryOfferClientTest extends TestCase
{
    private $phoneNumber = '888257571';
    private $testRatePlan = 23;

    /**
     * @throws \SoapFault
     */
    public function test_can_change_rate_plan_successfully()
    {
        $client = new ChangePrimaryOfferClient(
            $this->phoneNumber,
            $this->testRatePlan,
            'testTransactionId',
            'testTransactionDescription'
        );

        $this->assertTrue($client->query()->getResultHeader()->isSuccessful());
    }
}

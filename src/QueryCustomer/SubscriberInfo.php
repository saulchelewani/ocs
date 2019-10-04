<?php


namespace TNM\OCS\QueryCustomer;


class SubscriberInfo
{
    /**
     * @var array
     */
    private $subscriberInfo;

    public function __construct(array $subscriberInfo)
    {
        $this->subscriberInfo = $subscriberInfo;
    }

    public function getPrimaryOfferId(): int
    {
        return $this->subscriberInfo['PrimaryOfferId'];
    }
}
<?php


namespace TNM\OCS\QueryCustomer;


class Subscriber
{
    /**
     * @var array
     */
    private $subscriber;

    public function __construct(array $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    public function getPhoneNumber(): string
    {
        return $this->subscriber['SubscriberNo'];
    }

    public function getRatePlan(): int
    {
        return $this->getSubscriberInfo()->getPrimaryOfferId();
    }

    public function getSubscriberInfo(): SubscriberInfo
    {
        return new SubscriberInfo($this->subscriber['SubscriberInfo']);
    }

    public function getAccumulatorList(): array
    {
        $accumulators = [];
        foreach ($this->subscriber['AccumulatorList']['Accumulator'] as $accumulator) {
            $accumulators[] = new Accumulator($accumulator);
        }
        return $accumulators;
    }
}
<?php


namespace TNM\OCS\ChangePrimaryOffer;


use TNM\OCS\OcsRequest;

class ChangePrimaryOffer
{
    use OcsRequest;
    /**
     * @var string
     */
    private $phoneNumber;
    /**
     * @var int
     */
    private $newPlanId;

    public function __construct(string $phoneNumber, int $newPlanId)
    {
        $this->phoneNumber = $phoneNumber;
        $this->newPlanId = $newPlanId;
    }

    public function get()
    {
        return $this->prepareAttributes([
            "SubscriberNo" => $this->phoneNumber,
            "NewPrimaryOffer" => $this->prepareAttributes([
                "Id" => $this->newPlanId
            ])
        ]);
    }
}
<?php

namespace TNM\OCS;
abstract class RequestHeader
{
    use OcsRequest;

    private $transactionId;
    private $remark;
    private $commandId;

    public function __construct($transactionId, $description, $commandId)
    {
        $this->transactionId = $transactionId;
        $this->remark = $description;
        $this->commandId = $commandId;
    }

    public function get()
    {
        return $this->prepareAttributes(array_merge($this->all(), [
            'SequenceId' => $this->transactionId,
            'SerialNo' => $this->transactionId,
            'CommandId' => $this->commandId,
            'Remark' => $this->remark,
            'TransactionId' => $this->transactionId,
            'Version' => 1,
            'RequestType' => 'Event',
        ]));
    }

    private function all()
    {
        return [
            'additionInfo' => null,
            'BelToAreaID' => null,
            'currentCell' => null,
            'InterFrom' => null,
            'InterMedi' => null,
            'InterMode' => null,
            'Language' => null,
            'OperatorID' => null,
            'PartnerID' => null,
            'PartnerOperID' => null,
            'Remark' => null,
            'RequestType' => null,
            'Reserve2' => null,
            'Reserve3' => null,
            'SequenceId' => null,
            'SerialNo' => null,
            'SessionEntity' => null,
            'TenantId' => null,
            'ThirdPartyID' => null,
            'TradePartnerID' => null,
            'TransactionId' => null,
            'Version' => null,
            'visitArea' => null,
        ];
    }
}

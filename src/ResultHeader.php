<?php

namespace TNM\OCS;

class ResultHeader
{
    private $resultHeader;
    const OCS_SUCCESS_RESULT_CODE = "405000000";

    public function __construct(array $resultHeader)
    {
        $this->resultHeader = $resultHeader;
    }

    public function getResultCode()
    {
        return $this->resultHeader['ResultCode'];
    }

    public function isSuccessful()
    {
        return ($this->getResultCode() == Config::OCS_SUCCESS_RESULT_CODE ? true : false);
    }

    public function getMessage(){
        return $this->resultHeader['ResultDesc'];
    }

    public function get()
    {
        return $this->resultHeader;
    }
}

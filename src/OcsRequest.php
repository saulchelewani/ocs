<?php

namespace TNM\OCS;

trait OcsRequest
{

    abstract public function get();

    protected function prepareAttributes(array $rechargeRequestDetails)
    {
        $requestObject = new \stdClass();

        foreach ($rechargeRequestDetails as $key => $value) {
            $requestObject->{$key} = $value;
        }

        return $requestObject;
    }
}
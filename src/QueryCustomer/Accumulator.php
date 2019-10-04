<?php


namespace TNM\OCS\QueryCustomer;


class Accumulator
{
    /**
     * @var array
     */
    private $accumulator;

    public function __construct(array $accumulator)
    {

        $this->accumulator = $accumulator;
    }
}
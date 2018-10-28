<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 27.10.2018
 */

namespace DesignPatterns\Behavioral\State;


abstract class StateOrder
{
    /**
     * @var array
     */
    private $details;

    /**
     * @var StateOrder $state
     */
    protected static $state;

    protected function setStatus(string $status)
    {
       $this->details['status'] = $status;
       $this->details['updatedTime'] = time();
    }

    protected function getStatus(): string
    {
       return $this->details['status'];
    }

    /**
     * @return mixed
     */
    abstract protected function done();
}// StateOrder
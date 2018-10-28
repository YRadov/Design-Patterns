<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 27.10.2018
 */

namespace DesignPatterns\Behavioral\State;


class CreateOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus('created');
    }

    protected function done()
    {
        static::$state = new ShippingOrder();
    }
}// CreateOrder
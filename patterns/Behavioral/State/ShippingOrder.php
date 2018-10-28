<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 27.10.2018
 */

namespace DesignPatterns\Behavioral\State;


class ShippingOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus('shipping');
    }

    protected function done()
    {
        $this->setStatus('completed');
    }
}// ShippingOrder
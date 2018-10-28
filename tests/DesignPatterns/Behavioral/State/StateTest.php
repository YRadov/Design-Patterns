<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 27.10.2018
 */

namespace Tests\DesignPatterns\Behavioral\State;


use DesignPatterns\Behavioral\State\ContextOrder;
use DesignPatterns\Behavioral\State\CreateOrder;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testCanShipCreatedOrder()
    {
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();

        $this->assertEquals('shipping', $contextOrder->getStatus());
    }// testCanShipCreatedOrder

    public function testCanCompleteShippedOrder()
    {
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();
        $contextOrder->done();

        $this->assertEquals('completed', $contextOrder->getStatus());
    }
}// StateTest
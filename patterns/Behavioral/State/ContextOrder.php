<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 27.10.2018
 */

namespace DesignPatterns\Behavioral\State;


class ContextOrder extends StateOrder
{
    public function done()
    {
        static::$state->done();
    }

    /**
     * @return StateOrder
     */
    public static function getState(): StateOrder
    {
        return static::$state;
    }

    /**
     * @param StateOrder $state
     */
    public static function setState(StateOrder $state): void
    {
        static::$state = $state;
    }

    public function getStatus(): string
    {
        return static::$state->getStatus();
    }
}// ContextOrder
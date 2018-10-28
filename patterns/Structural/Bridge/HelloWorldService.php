<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 28.10.2018
 */

namespace DesignPatterns\Structural\Bridge;


class HelloWorldService extends Service
{
    public function get()
    {
        return $this->implementation->format('Hello World');
    }
}// HelloWorldService
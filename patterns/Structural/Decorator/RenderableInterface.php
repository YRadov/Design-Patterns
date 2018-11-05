<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 05.11.2018
 */

namespace DesignPatterns\Structural\Decorator;


interface RenderableInterface
{
    public function renderData(): string;
}
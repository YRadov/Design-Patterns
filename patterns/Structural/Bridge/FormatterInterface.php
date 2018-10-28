<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 28.10.2018
 */

namespace DesignPatterns\Structural\Bridge;


interface FormatterInterface
{
    public function format(string $text);
}
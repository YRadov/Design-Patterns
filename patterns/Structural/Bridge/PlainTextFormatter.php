<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 28.10.2018
 */

namespace DesignPatterns\Structural\Bridge;


class PlainTextFormatter implements FormatterInterface
{
    public function format(string $text)
    {
        return $text;
    }
}// PlainTextFormatter
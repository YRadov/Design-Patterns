<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 05.11.2018
 */

namespace DesignPatterns\Structural\Decorator;


class Webservice implements RenderableInterface
{
    /**
     * @var string
     */
    private $data;

    /**
     * Webservice constructor.
     * @param string $data
     */
    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function renderData(): string
    {
        return $this->data;
    }
}// Webservice
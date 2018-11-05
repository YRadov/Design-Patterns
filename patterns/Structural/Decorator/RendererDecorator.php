<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 05.11.2018
 */

namespace DesignPatterns\Structural\Decorator;


abstract class RendererDecorator implements RenderableInterface
{
    /**
     * @var RenderableInterface
     */
    protected $wrapped;

    /**
     * RendererDecorator constructor.
     * @param RenderableInterface $renderer
     */
    public function __construct(RenderableInterface $renderer)
    {
        $this->wrapped = $renderer;
    }
}// RendererDecorator
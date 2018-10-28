<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 28.10.2018
 */

namespace DesignPatterns\Structural\Bridge;


abstract class Service
{
    /**
     * @var FormatterInterface
     */
    protected $implementation;

    /**
     * Service constructor.
     * @param FormatterInterface $printer
     */
    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * @param FormatterInterface $printer
     */
    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}// Service
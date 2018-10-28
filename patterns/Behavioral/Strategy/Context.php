<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 28.10.2018
 */

namespace DesignPatterns\Behavioral\Strategy;


class Context
{
    /**
     * @var ComparatorInterface
     */
    private $comparator;

    /**
     * Context constructor.
     * @param ComparatorInterface $comparator
     */
    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements): array
    {
        uasort($elements, [$this->comparator, 'compare']);
        return $elements;
    }
}// Context
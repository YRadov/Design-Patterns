<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 31.10.2018
 */

namespace DesignPatterns\Behavioral\Visitor;


class Group implements Role
{
    /**
     * @var string
     */
    private $name;

    /**
     * User constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return sprintf('Group %s', $this->name);
    }

    public function accept(RoleVisitorInterface $visitor)
    {
        $visitor->visitGroup($this);
    }
}// Group
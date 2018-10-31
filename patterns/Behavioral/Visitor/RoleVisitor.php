<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 31.10.2018
 */

namespace DesignPatterns\Behavioral\Visitor;


class RoleVisitor implements RoleVisitorInterface
{
    /**
     * @var Role[]
     */
    private $visited = [];

    /**
     * @var string
     */
    private $objName;

    public function visitGroup(Group $role)
    {
        $this->visited[] = $role;
        $this->objName = 'RoleVisitor act for ' . $role->getName();
    }

    public function visitUser(User $role)
    {
        $this->visited[] = $role;
        $this->objName = 'RoleVisitor act for ' . $role->getName();
    }

    /**
     * @return Role[]
     */
    public function getVisited(): array
    {
        return $this->visited;
    }

    /**
     * @return string
     */
    public function getObjName(): string
    {
        return $this->objName;
    }
}// RoleVisitor
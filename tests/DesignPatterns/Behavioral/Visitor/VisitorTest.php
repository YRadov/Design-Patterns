<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 31.10.2018
 */

namespace Tests\DesignPatterns\Behavioral\Visitor;


use DesignPatterns\Behavioral\Visitor\Group;
use DesignPatterns\Behavioral\Visitor\Role;
use DesignPatterns\Behavioral\Visitor\RoleVisitor;
use DesignPatterns\Behavioral\Visitor\User;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    /**
     * @var RoleVisitor
     */
    private $visitor;

    protected function setUp()
    {
        $this->visitor = new RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Dominik'), 'User Dominik'],
            [new Group('Administrators'), 'Group Administrators'],
        ];
    }

    /**
     * @dataProvider provideRoles
     *
     * @param Role $role
     * @param string $name
     * @throws \Exception
     */
    public function testVisitSomeRole(Role $role, string $name)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
        $this->assertEquals('RoleVisitor act for ' . $name, $this->visitor->getObjName());
    }
}// VisitorTest
<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 31.10.2018
 */

namespace DesignPatterns\Behavioral\Visitor;


interface RoleVisitorInterface
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}
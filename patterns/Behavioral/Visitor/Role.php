<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 31.10.2018
 */

namespace DesignPatterns\Behavioral\Visitor;


interface Role
{
    public function accept(RoleVisitorInterface $visitor);
}
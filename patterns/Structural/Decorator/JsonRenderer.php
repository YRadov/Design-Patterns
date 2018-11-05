<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 05.11.2018
 */

namespace DesignPatterns\Structural\Decorator;


class JsonRenderer extends RendererDecorator
{
    public function renderData(): string
    {
        $data = $this->wrapped->renderData();
        return json_encode(['data' => $data]);
    }
}// JsonRenderer
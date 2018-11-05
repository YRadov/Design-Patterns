<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 05.11.2018
 */

namespace DesignPatterns\Structural\Decorator;


class XmlRenderer extends RendererDecorator
{
    public function renderData(): string
    {
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();
        $doc->appendChild($doc->createElement('content', $data));

        return $doc->saveXML();
    }
}// XmlRenderer
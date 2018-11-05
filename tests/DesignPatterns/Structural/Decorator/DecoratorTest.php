<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 05.11.2018
 */

namespace Tests\DesignPatterns\Structural\Decorator;


use DesignPatterns\Structural\Decorator\JsonRenderer;
use DesignPatterns\Structural\Decorator\Webservice;
use DesignPatterns\Structural\Decorator\XmlRenderer;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    /**
     * @var Webservice
     */
    private $service;

    protected function setUp()
    {
        $this->service = new Webservice('foobar');
    }

    public function testJsonDecorator()
    {
        $service = new JsonRenderer($this->service);

        $this->assertEquals('{"data":"foobar"}', $service->renderData());
    }

    public function testXmlDecorator()
    {
        $service = new XmlRenderer($this->service);

        $this->assertXmlStringEqualsXmlString('<?xml version="1.0"?><content>foobar</content>', $service->renderData());
    }

    public function testChainDecorators()
    {
        $service = new JsonRenderer($this->service);

        $service = new XmlRenderer($service);

        $this->assertXmlStringEqualsXmlString(
            '<?xml version="1.0"?><content>{"data":"foobar"}</content>',
            $service->renderData()
        );
    }
}// DecoratorTest
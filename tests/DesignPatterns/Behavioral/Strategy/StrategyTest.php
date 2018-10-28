<?php
/**
 * User: radov.yuriy@ukr.net
 * Date: 28.10.2018
 */

namespace Tests\DesignPatterns\Behavioral\Strategy;


use DesignPatterns\Behavioral\Strategy\Context;
use DesignPatterns\Behavioral\Strategy\DateComparator;
use DesignPatterns\Behavioral\Strategy\IdComparator;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function provideIntegers()
    {
        return [
            [
                [['id' => 2], ['id' => 1], ['id' => 3]],
                ['id' => 1],
            ],
            [
                [['id' => 3], ['id' => 2], ['id' => 1]],
                ['id' => 1],
            ],
        ];
    }// provideIntegers
    
    public function provideDates()
    {
        return [
          [
              [['date' => '2014-03-03'], ['date' => '2015-03-02'], ['date' => '2013-03-01']],
              ['date' => '2013-03-01'],
          ],
          [
              [['date' => '2014-02-03'], ['date' => '2013-02-01'], ['date' => '2015-02-02']],
              ['date' => '2013-02-01'],
          ],
        ];
    }// provideDates

    /**
     * @dataProvider provideIntegers
     *
     * @param array $collection
     * @param array $expected
     * @throws \Exception
     */
    public function testIdComparator($collection, $expected)
    {
        $obj = new Context(new IdComparator);
        $elements = $obj->executeStrategy($collection);

        $firstElement = array_shift($elements);
        $this->assertEquals($expected, $firstElement);
    }// testIdComparator

    /**
     * @dataProvider provideDates
     *
     * @param array $collection
     * @param array $expected
     * @throws \Exception
     */
    public function testDateComparator($collection, $expected)
    {
        $obj = new Context(new DateComparator());
        $elements = $obj->executeStrategy($collection);

        $firstElement = array_shift($elements);
        $this->assertEquals($expected, $firstElement);
    }// testDateComparator
}// StrategyTest
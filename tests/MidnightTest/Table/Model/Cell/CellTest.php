<?php

namespace MidnightTest\Table\Model\Cell;

use Midnight\Table\Model\Cell\Cell;

class CellTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetAndGetValue()
    {
        $value = 'Foo';
        $cell = new Cell();
        $cell->setValue($value);
        $this->assertEquals($value, $cell->getValue());
    }
}

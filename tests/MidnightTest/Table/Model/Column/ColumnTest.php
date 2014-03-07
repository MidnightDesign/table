<?php

namespace MidnightTest\Table\Model\Column;

use Midnight\Table\Model\Column\Column;

class ColumnTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetAndGetLabel()
    {
        $label = 'Foo';
        $cell = new Column();
        $cell->setLabel($label);
        $this->assertEquals($label, $cell->getLabel());
    }
}

<?php

namespace MidnightTest\Table\Model\Row;

use Midnight\Table\Model\Cell\Cell;
use Midnight\Table\Model\Row\Row;

class RowTest extends \PHPUnit_Framework_TestCase
{
    public function testSetAndGetCells()
    {
        $cell = new Cell();
        $row = new Row();
        $row->addCell($cell);
        $cells = $row->getCells();
        $this->assertEquals($cell, $cells[0]);
    }
}

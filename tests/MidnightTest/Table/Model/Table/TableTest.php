<?php

namespace MidnightTest\Table\Model\Table;

use Midnight\Table\Model\Column\Column;
use Midnight\Table\Model\Row\Row;
use Midnight\Table\Model\Table\Table;

class TableTest extends \PHPUnit_Framework_TestCase
{
    public function testSetAndGetRows()
    {
        $table = new Table();
        $row = new Row();
        $table->addRow($row);
        $rows = $table->getRows();
        $this->assertEquals($row, $rows[0]);
    }

    public function testSetAndGetColumns()
    {
        $table = new Table();
        $column = new Column();
        $table->addColumn($column);
        $columns = $table->getColumns();
        $this->assertEquals($column, $columns[0]);
    }
}

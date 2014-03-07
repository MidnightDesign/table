<?php

namespace MidnightTest\Table\Model\Table;

use Midnight\Table\Model\Table\ArrayTable;

class ArrayTableTest extends \PHPUnit_Framework_TestCase
{
    public function testColumnsAreMerged()
    {
        $data = array(
            array('foo' => 1),
            array('foo' => 1, 'bar' => 2),
        );
        $table = new ArrayTable($data);
        $columns = $table->getColumns();
        $this->assertEquals(2, count($columns));
        $this->assertEquals('foo', $columns[0]->getLabel());
        $this->assertEquals('bar', $columns[1]->getLabel());
    }

    public function testRowCountMatches()
    {
        $data = array(
            array('foo' => 1),
            array('bar' => 1),
        );
        $table = new ArrayTable($data);
        $this->assertEquals(2, count($table->getRows()));
    }

    public function testCellCountMatches()
    {
        $data = array(
            array('foo' => 1, 'bar' => 1),
        );
        $table = new ArrayTable($data);
        $rows = $table->getRows();
        $this->assertEquals(2, count($rows[0]->getCells()));
    }
}

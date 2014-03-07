<?php

namespace Midnight\Table\Model\Table;

use Midnight\Table\Model\Column\Column;
use Midnight\Table\Model\Column\ColumnInterface;
use Midnight\Table\Model\Row\ArrayRow;
use Midnight\Table\Model\Row\RowInterface;

class ArrayTable implements TableInterface
{
    /**
     * @var array
     */
    private $data;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return RowInterface[]
     */
    public function getRows()
    {
        $rows = array();

        foreach ($this->data as $rowData) {
            $rows[] = new ArrayRow($rowData);
        }

        return $rows;
    }

    /**
     * @return ColumnInterface[]
     */
    public function getColumns()
    {
        $columns = array();

        $keys = $this->getColumnKeys();
        foreach ($keys as $label) {
            $column = new Column();
            $column->setLabel($label);
            $columns[] = $column;
        }

        return $columns;
    }

    /**
     * @return array
     */
    private function getColumnKeys()
    {
        $keys = array();
        foreach ($this->data as $rowData) {
            $keys = array_merge($keys, array_keys($rowData));
        }
        $keys = array_unique($keys);
        return $keys;
    }
}

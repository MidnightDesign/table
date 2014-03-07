<?php

namespace Midnight\Table\Model\Table;

use Midnight\Table\Model\Column\ColumnInterface;
use Midnight\Table\Model\Row\RowInterface;

class Table implements TableInterface
{
    /**
     * @var RowInterface[]
     */
    private $rows = array();
    /**
     * @var ColumnInterface[]
     */
    private $columns = array();

    /**
     * @return RowInterface[]
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param RowInterface $row
     *
     * @return $this
     */
    public function addRow(RowInterface $row)
    {
        $this->rows[] = $row;
    }

    /**
     * @return ColumnInterface[]
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * @param ColumnInterface $column
     *
     * @return $this
     */
    public function addColumn(ColumnInterface $column)
    {
        $this->columns[] = $column;
    }
}

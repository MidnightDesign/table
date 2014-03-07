<?php

namespace Midnight\Table\Model\Row;

use Midnight\Table\Model\Cell\Cell;
use Midnight\Table\Model\Cell\CellInterface;

class ArrayRow implements RowInterface
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
     * @return CellInterface[]
     */
    public function getCells()
    {
        $cells = array();

        foreach ($this->data as $value) {
            $cell = new Cell();
            $cell->setValue($value);
            $cells[] = $cell;
        }

        return $cells;
    }
}

<?php

namespace Midnight\Table\Model\Row;

use Midnight\Table\Model\Cell\CellInterface;

class Row implements RowInterface
{
    /**
     * @var CellInterface[]
     */
    private $cells = array();

    /**
     * @return CellInterface[]
     */
    public function getCells()
    {
        return $this->cells;
    }

    /**
     * @param CellInterface $cell
     */
    public function addCell($cell)
    {
        $this->cells[] = $cell;
    }
}

<?php

namespace Midnight\Table\Model\Row;

use Midnight\Table\Model\Cell\CellInterface;

interface RowInterface
{
    /**
     * @return CellInterface[]
     */
    public function getCells();
}

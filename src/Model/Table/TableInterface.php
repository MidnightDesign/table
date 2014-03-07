<?php

namespace Midnight\Table\Model\Table;

use Midnight\Table\Model\Column\ColumnInterface;
use Midnight\Table\Model\Row\RowInterface;

interface TableInterface
{
    /**
     * @return RowInterface[]
     */
    public function getRows();

    /**
     * @return ColumnInterface[]
     */
    public function getColumns();
}

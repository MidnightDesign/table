<?php

namespace Midnight\Table\Model\Cell;

class Cell implements CellInterface
{
    /**
     * @var mixed
     */
    private $value;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}

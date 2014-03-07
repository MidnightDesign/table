<?php

namespace Midnight\Table\Renderer;

use Midnight\Table\Model\Table\TableInterface;

interface RendererInterface
{
    /**
     * @param TableInterface $table
     *
     * @return string
     */
    public function render(TableInterface $table);
} 

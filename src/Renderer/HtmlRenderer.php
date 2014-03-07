<?php

namespace Midnight\Table\Renderer;

use Midnight\Table\Model\Cell\CellInterface;
use Midnight\Table\Model\Column\ColumnInterface;
use Midnight\Table\Model\Row\RowInterface;
use Midnight\Table\Model\Table\TableInterface;

class HtmlRenderer implements RendererInterface
{
    /**
     * @var TableInterface
     */
    private $table;
    /**
     * @var \DOMDocument
     */
    private $document;

    /**
     * @param TableInterface $table
     *
     * @return string
     */
    public function render(TableInterface $table)
    {
        $this->table = $table;
        return $this->build()->saveHtml();
    }

    /**
     * @return \DOMElement
     */
    private function getTable()
    {
        $table = $this->document->createElement('table');
        $table->appendChild($this->getHead());
        $table->appendChild($this->getBody());
        $table->appendChild($this->getFoot());
        return $table;
    }

    /**
     * @return \DOMDocument
     */
    private function build()
    {
        $this->document = new \DOMDocument('1.0', 'utf-8');
        $this->document->appendChild($this->getTable());
        return $this->document;
    }

    /**
     * @return \DOMElement
     */
    private function getHead()
    {
        $thead = $this->document->createElement('thead');
        $tr = $this->document->createElement('tr');
        foreach ($this->table->getColumns() as $column) {
            $tr->appendChild($this->getTh($column));
        }
        $thead->appendChild($tr);
        return $thead;
    }

    /**
     * @return \DOMElement
     */
    private function getBody()
    {
        $tbody = $this->document->createElement('tbody');
        foreach ($this->table->getRows() as $row) {
            $tbody->appendChild($this->getRow($row));
        }
        return $tbody;
    }

    /**
     * @return \DOMElement
     */
    private function getFoot()
    {
        return $this->document->createElement('tfoot');
    }

    /**
     * @param RowInterface $row
     *
     * @return \DOMElement
     */
    private function getRow(RowInterface $row)
    {
        $rowElement = $this->document->createElement('tr');
        foreach ($row->getCells() as $cell) {
            $rowElement->appendChild($this->getCell($cell));
        }
        return $rowElement;
    }

    /**
     * @param CellInterface $cell
     *
     * @return \DOMElement
     */
    private function getCell(CellInterface $cell)
    {
        $cellElement = $this->document->createElement('td');
        $cellElement->appendChild($this->document->createTextNode((string)$cell->getValue()));
        return $cellElement;
    }

    /**
     * @param ColumnInterface $column
     *
     * @return \DOMElement
     */
    private function getTh(ColumnInterface $column)
    {
        $th = $this->document->createElement('th');
        $th->appendChild($this->document->createTextNode($column->getLabel()));
        return $th;
    }
}

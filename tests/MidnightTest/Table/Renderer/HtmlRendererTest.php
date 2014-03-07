<?php

namespace MidnightTest\Table\Renderer;

use Midnight\Table\Model\Table\ArrayTable;
use Midnight\Table\Model\Table\Table;
use Midnight\Table\Renderer\HtmlRenderer;

class HtmlRendererTest extends \PHPUnit_Framework_TestCase
{
    public function testCanRenderEmptyTable()
    {
        $table = new Table();
        $rendered = $this->getRenderer()->render($table);
        $expected = '<table></table>' . PHP_EOL;
        $this->assertEquals($expected, $rendered);
    }

    public function testCanRenderSimpleTable()
    {
        $table = new ArrayTable(array(array('foo' => 'bar', 'bar' => 'baz'), array('foo' => 'foo', 'bar' => 'bar')));
        $rendered = $this->getRenderer()->render($table);
        $expected = '<table><thead><tr><th>foo</th><th>bar</th></tr></thead><tbody><tr><td>bar</td><td>baz</td></tr><tr><td>foo</td><td>bar</td></tr></tbody></table>' . PHP_EOL;
        $this->assertEquals($expected, $rendered);
    }

    private function getRenderer()
    {
        return new HtmlRenderer();
    }
}

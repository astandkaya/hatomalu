<?php

namespace Hatomalu\Parser;

use Hatomalu\Manager\IndentManager;

abstract class BaseParser
{
    protected const SYMBOL_BEGIN = '<';
    protected const SYMBOL_END = '>';
    protected const SYMBOL_SLASH = '/';

    protected const SYMBOL_QUOTATION = '"';

    protected const SYMBOL_LF = "\n";
    protected const SYMBOL_CR = "\r";

    public function __construct(
        protected mixed $content,
        private IndentManager $indent = new IndentManager,
    ) {
    }

    public function __invoke() : string
    {
        $this->indent->increment();

        $parse = $this->exec();

        $this->indent->decrement();

        return $parse;
    }

    abstract public function exec() : string;

    protected function insertIndent( string $content ) : string
    {
        return (string)$this->indent . $content;
    }
}
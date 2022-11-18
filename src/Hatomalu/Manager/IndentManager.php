<?php

namespace Hatomalu\Manager;

final class IndentManager 
{
    private const SYMBOL_INDENT = '    ';

    private static int $indent_count = 0;

    public function __toString()
    {
        return str_repeat( self::SYMBOL_INDENT, self::$indent_count - 1 );
    }

    public function increment() : void
    {
        self::$indent_count++;
    }

    public function decrement() : void
    {
        self::$indent_count--;
    }
}

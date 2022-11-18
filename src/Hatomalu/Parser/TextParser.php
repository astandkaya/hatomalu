<?php

namespace Hatomalu\Parser;

final class TextParser extends BaseParser
{
    public function exec() : string
    {
        return $this->insertIndent( $this->content->text );
    }
}
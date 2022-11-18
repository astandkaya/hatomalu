<?php

namespace Hatomalu\Component;

use Hatomalu\Parser\TextParser;

final class Text 
{
    public function __construct(
        public string $text = '',
    ) {
    }

    public function __toString()
    {
        return $this->parse();
    }

    final public function parse() : string
    {
        $parser = new TextParser( $this );
        return $parser();
    }

    final public function take() : mixed // null
    {
        return null;
    }
}

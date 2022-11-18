<?php

namespace Hatomalu\Parser;

final class VoidElementParser extends TagParser
{
    public function exec() : string
    {
        $this->attribute = $this->content->getAttribute();
        
        return $this->insertIndent( $this->genTag() );
    }
}

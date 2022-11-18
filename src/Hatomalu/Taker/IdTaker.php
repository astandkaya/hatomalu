<?php

namespace Hatomalu\Taker;

use Hatomalu\Component\Text;
use Hatomalu\Component\Category\Tag;

final class IdTaker extends BaseTaker
{
    public function exec() : Tag|array|null
    {
        if ( $this->content->getAttribute()->{$this->attribute} === $this->name ) {
            return $this->content;
        }

        foreach ($this->content->getChild() as $child) {
            $hit = $child->take( $this->attribute, $this->name);
            if ( $hit ) return $hit;
        }

        return null;
    }
}
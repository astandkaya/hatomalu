<?php

namespace Hatomalu\Taker;

use Hatomalu\Component\Text;
use Hatomalu\Component\Category\Tag;

final class AttributeTaker extends BaseTaker
{
    public function exec() : Tag|array|null
    {
        $contents = [];

        $this->checkThisContentAttribute( $contents );
        $this->checkChildContentAttribute( $contents );

        return array_filter( $contents );
    }

    protected function checkThisContentAttribute( array &$contents ) : void
    {
        if ( in_array( $this->name, $this->content->getAttribute()->{$this->attribute} ) ) {
            $contents[] = $this->content;
        }
    }

    protected function checkChildContentAttribute( array &$contents ) : void
    {
        foreach ($this->content->getChild() as $child) {
            $contents = array_merge( $contents, $child->take( $this->attribute, $this->name) ?? [] );
        }
    }
}

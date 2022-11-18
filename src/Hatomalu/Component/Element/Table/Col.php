<?php

namespace Hatomalu\Component\Element\Table;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Col extends TagAbstract
{
    public const TAG = 'col';

    protected string $parser = \Hatomalu\Parser\VoidElementParser::class;

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

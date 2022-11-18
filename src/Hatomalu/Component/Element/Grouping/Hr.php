<?php

namespace Hatomalu\Component\Element\Grouping;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
};

final class Hr extends TagAbstract implements Flow
{
    public const TAG = 'hr';

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

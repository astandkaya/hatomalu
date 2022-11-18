<?php

namespace Hatomalu\Component\Element\Embedded;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Phrasing,
};

final class Area extends TagAbstract implements Flow, Phrasing
{
    public const TAG = 'area';

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

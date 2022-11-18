<?php

namespace Hatomalu\Component\Element\Section;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Heading,
    Palpable,
};

final class H2 extends TagAbstract implements Flow, Heading, Palpable
{
    public const TAG = 'h2';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

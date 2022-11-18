<?php

namespace Hatomalu\Component\Element\Section;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Palpable,
};

final class Header extends TagAbstract implements Flow, Palpable
{
    public const TAG = 'header';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

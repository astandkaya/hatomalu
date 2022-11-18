<?php

namespace Hatomalu\Component\Element\Embedded;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Phrasing,
    Embedded,
};

final class Picture extends TagAbstract implements Flow, Phrasing, Embedded
{
    public const TAG = 'picture';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

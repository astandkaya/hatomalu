<?php

namespace Hatomalu\Component\Element\Embedded;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Phrasing,
    Palpable,
};

final class Map extends TagAbstract implements Flow, Phrasing, Palpable
{
    public const TAG = 'map';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

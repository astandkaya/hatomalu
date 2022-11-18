<?php

namespace Hatomalu\Component\Element\Embedded;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Phrasing,
    Embedded,
    Palpable,
};

final class Svg extends TagAbstract implements Flow, Phrasing, Embedded, Palpable
{
    public const TAG = 'svg';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

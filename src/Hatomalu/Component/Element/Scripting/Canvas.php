<?php

namespace Hatomalu\Component\Element\Scripting;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Phrasing,
    Embedded,
    Palpable,
};

final class Canvas extends TagAbstract implements Flow, Phrasing, Embedded, Palpable
{
    public const TAG = 'canvas';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

<?php

namespace Hatomalu\Component\Element\Scripting;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Phrasing,
};

final class Slot extends TagAbstract implements Flow, Phrasing
{
    public const TAG = 'slot';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

<?php

namespace Hatomalu\Component\Element\TextLevelSemantics;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Phrasing,
    Palpable,
};

final class Small extends TagAbstract implements Flow, Phrasing, Palpable
{
    public const TAG = 'small';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

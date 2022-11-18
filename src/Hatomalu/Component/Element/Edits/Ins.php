<?php

namespace Hatomalu\Component\Element\Edits;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Phrasing,
    Palpable,
};

final class Ins extends TagAbstract implements Flow, Phrasing, Palpable
{
    public const TAG = 'ins';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

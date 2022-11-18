<?php

namespace Hatomalu\Component\Element\Edits;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Phrasing,
};

final class Del extends TagAbstract implements Flow, Phrasing
{
    public const TAG = 'del';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

<?php

namespace Hatomalu\Component\Element\Grouping;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Palpable,
};

final class Ul extends TagAbstract implements Flow, Palpable
{
    public const TAG = 'ul';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

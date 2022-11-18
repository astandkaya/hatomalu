<?php

namespace Hatomalu\Component\Element\Grouping;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Palpable,
};

final class Pre extends TagAbstract implements Flow, Palpable
{
    public const TAG = 'pre';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

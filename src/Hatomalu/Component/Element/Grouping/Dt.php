<?php

namespace Hatomalu\Component\Element\Grouping;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Dt extends TagAbstract
{
    public const TAG = 'dt';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

<?php

namespace Hatomalu\Component\Element\Grouping;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Figcaption extends TagAbstract
{
    public const TAG = 'figcaption';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

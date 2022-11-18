<?php

namespace Hatomalu\Component\Element\Table;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Caption extends TagAbstract
{
    public const TAG = 'caption';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

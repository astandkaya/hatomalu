<?php

namespace Hatomalu\Component\Element\Table;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Colgroup extends TagAbstract
{
    public const TAG = 'colgroup';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

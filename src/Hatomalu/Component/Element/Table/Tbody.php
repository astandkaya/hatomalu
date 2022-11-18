<?php

namespace Hatomalu\Component\Element\Table;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Tbody extends TagAbstract
{
    public const TAG = 'tbody';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

<?php

namespace Hatomalu\Component\Element\TextLevelSemantics;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Rt extends TagAbstract
{
    public const TAG = 'rt';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

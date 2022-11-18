<?php

namespace Hatomalu\Component\Element\Form;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Option extends TagAbstract
{
    public const TAG = 'option';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

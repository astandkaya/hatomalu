<?php

namespace Hatomalu\Component\Element\Form;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Legend extends TagAbstract
{
    public const TAG = 'legend';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

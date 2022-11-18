<?php

namespace Hatomalu\Component\Element\Section;

use Hatomalu\Component\Element\Root\Html;
use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Body extends TagAbstract
{
    public const TAG = 'body';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

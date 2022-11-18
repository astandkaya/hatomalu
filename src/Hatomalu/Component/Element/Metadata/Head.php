<?php

namespace Hatomalu\Component\Element\Metadata;

use Hatomalu\Component\Element\Root\Html;
use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Head extends TagAbstract
{
    public const TAG = 'head';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

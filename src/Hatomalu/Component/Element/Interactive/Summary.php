<?php

namespace Hatomalu\Component\Element\Interactive;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Summary extends TagAbstract
{
    public const TAG = 'summary';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

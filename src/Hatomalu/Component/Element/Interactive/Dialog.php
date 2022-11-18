<?php

namespace Hatomalu\Component\Element\Interactive;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
};

final class Dialog extends TagAbstract implements Flow
{
    public const TAG = 'dialog';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

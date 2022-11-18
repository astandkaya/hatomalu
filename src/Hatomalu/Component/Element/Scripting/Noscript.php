<?php

namespace Hatomalu\Component\Element\Scripting;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Metadata,
    Flow,
    Phrasing,
};

final class Noscript extends TagAbstract implements Metadata, Flow, Phrasing
{
    public const TAG = 'noscript';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

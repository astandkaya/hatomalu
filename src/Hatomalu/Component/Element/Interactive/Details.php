<?php

namespace Hatomalu\Component\Element\Interactive;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Interactive,
    Palpable,
};

final class Details extends TagAbstract implements Flow, Interactive, Palpable
{
    public const TAG = 'details';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

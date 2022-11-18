<?php

namespace Hatomalu\Component\Element\Embedded;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Phrasing,
    Embedded,
    Interactive,
    Palpable,
};

final class Video extends TagAbstract implements Flow, Phrasing, Embedded, Interactive, Palpable
{
    public const TAG = 'video';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

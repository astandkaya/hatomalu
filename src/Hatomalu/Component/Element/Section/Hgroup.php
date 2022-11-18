<?php

namespace Hatomalu\Component\Element\Section;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Heading,
    Palpable,
};

final class Hgroup extends TagAbstract implements Flow, Heading, Palpable
{
    public const TAG = 'hgroup';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

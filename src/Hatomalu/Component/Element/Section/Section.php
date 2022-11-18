<?php

namespace Hatomalu\Component\Element\Section;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Sectioning,
    Palpable,
};

final class Section extends TagAbstract implements Flow, Sectioning, Palpable
{
    public const TAG = 'section';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

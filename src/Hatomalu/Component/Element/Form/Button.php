<?php

namespace Hatomalu\Component\Element\Form;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Phrasing,
    Interactive,
    Palpable,
};

final class Button extends TagAbstract implements Flow, Phrasing, Interactive, Palpable
{
    public const TAG = 'button';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

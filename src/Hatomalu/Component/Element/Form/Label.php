<?php

namespace Hatomalu\Component\Element\Form;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Interactive,
    Palpable,
};

final class Label extends TagAbstract implements Flow, Interactive, Palpable
{
    public const TAG = 'label';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

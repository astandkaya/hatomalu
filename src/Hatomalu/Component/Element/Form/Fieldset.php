<?php

namespace Hatomalu\Component\Element\Form;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Flow,
    Palpable,
};

final class Fieldset extends TagAbstract implements Flow, Palpable
{
    public const TAG = 'fieldset';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

<?php

namespace Hatomalu\Component\Element\Scripting;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Metadata,
    Flow,
    Phrasing,
};

final class Template extends TagAbstract implements Metadata, Flow, Phrasing
{
    public const TAG = 'template';

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

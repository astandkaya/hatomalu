<?php

namespace Hatomalu\Component\Element\Metadata;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Metadata,
    Flow,
    Phrasing,
};

final class Link extends TagAbstract implements Metadata,Flow,Phrasing
{
    public const TAG = 'link';

    protected string $parser = \Hatomalu\Parser\VoidElementParser::class;

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

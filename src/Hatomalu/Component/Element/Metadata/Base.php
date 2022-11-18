<?php

namespace Hatomalu\Component\Element\Metadata;

use Hatomalu\Component\Element\Metadata\Head;
use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Metadata,
};

final class Base extends TagAbstract implements Metadata
{
    public const TAG = 'base';

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

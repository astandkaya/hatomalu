<?php

namespace Hatomalu\Component\Element\Metadata;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
    Metadata,
};

final class Meta extends TagAbstract implements Metadata
{
    public const TAG = 'meta';

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

<?php

namespace Hatomalu\Component\Element\Root;

use Hatomalu\Component\Category\{
    Tag,
    TagAbstract,
};

final class Html extends TagAbstract
{
    public const TAG = 'html';

    public function __toString()
    {
        return "<!DOCTYPE html>\n".$this->parse();
    }

    public function isAllowParent( Tag $parent ) : \Exception|bool
    {
        return true;
    }

    public function isAllowChild( Tag $child ) : \Exception|bool
    {
        return true;
    }
}

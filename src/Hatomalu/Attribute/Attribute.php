<?php

namespace Hatomalu\Attribute;

use Hatomalu\Style\Style;

final class Attribute
{
    public function __construct(
        public string $id = '',
        public array $class = [],
        public array $data = [],
        public array $other = [],

        // global
        public string $accesskey = '',
        public string $autocapitalize = '',
        public string $autofocus = '',
        public string $contenteditable = '',
        public string $dir = '',
        public string $draggable = '',
        public string $enterkeyhint = '',
        public string $hidden = '',
        public string $inert = '',
        public string $inputmode = '',
        public string $is = '',
        public string $itemid = '',
        public string $itemprop = '',
        public string $itemref = '',
        public string $itemscope = '',
        public string $itemtype = '',
        public string $lang = '',
        public string $nonce = '',
        public string $spellcheck = '',
        public ?Style $style = null,
        public string $tabindex = '',
        public string $title = '',
        public string $translate = '',
    ) {
    }
}
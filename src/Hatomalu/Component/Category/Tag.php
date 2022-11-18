<?php

namespace Hatomalu\Component\Category;

interface Tag
{
    public function __toString() : string;

    public function parse() : string;
    
    public function take( string $attribute, string $name ) : Tag|array|null;
}

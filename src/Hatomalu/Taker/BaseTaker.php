<?php

namespace Hatomalu\Taker;

use Hatomalu\Component\Category\Tag;

abstract class BaseTaker
{
    public function __construct(
        protected mixed $content,
        protected string $attribute,
        protected string $name,
    ) {
    }

    public function __invoke() : Tag|array|null
    {
        return $this->exec();
    }

    abstract public function exec() : Tag|array|null;
}
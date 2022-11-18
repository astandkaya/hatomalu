<?php

namespace Hatomalu\Component\Category;

use Hatomalu\Attribute\Attribute;
use Hatomalu\Component\Text;
use Exception;

abstract class TagAbstract implements Tag
{
    public const TAG = '';

    public string $id;

    protected array $child = [];

    protected string $parser = \Hatomalu\Parser\TagParser::class;
    protected string $attr_taker = \Hatomalu\Taker\AttributeTaker::class;
    protected string $id_taker = \Hatomalu\Taker\IdTaker::class;

    protected bool $is_allow_text = true;


    public function __construct(
        protected Attribute $attribute = new Attribute,
        array $child = [],
    ) {
        $this->id = uniqid(rand());

        foreach ($child as $component) $this->pushChild( $component );
    }

    public function __toString()
    {
        return $this->parse();
    }



    public function getAttribute() : Attribute
    {
        return $this->attribute;
    }

    public function getChild() : array
    {
        return $this->child;
    }


    final public function parse() : string
    {
        $parser = new $this->parser( $this );
        return $parser();
    }



    final public function take( string $attribute, string $name ) : Tag|array|null
    {
        $taker_class = $attribute === 'id' ? $this->id_taker : $this->attr_taker;

        $taker = new $taker_class( $this, $attribute, $name );
        return $taker();
    }

    final public function takeId( string $name ) : Tag|null
    {
        return $this->take( 'id', $name );
    }


    abstract protected function isAllowParent( Tag $parent ) : Exception|bool;

    abstract protected function isAllowChild( Tag $child ) : Exception|bool;

    protected function checkAllowParent( Tag $component ) : void
    {
        $exception = $component->isAllowParent( $this );
        $exception ?: throw $exception;
    }

    protected function checkAllowChild( Tag $component ) : void
    {
        $exception = $this->isAllowChild( $component );
        $exception ?: throw $exception;
    }

    protected function checkAllowText() : void
    {
        $this->is_allow_text ?: throw new Exception( sprintf("'%s' is not allowed text", $this::TAG) );
    }



    final public function resetChild() : void
    {
        $this->child = [];
    }


    final protected function push( Tag|Text $component ) : void
    {
        array_push( $this->child, $component);
    }

    final public function pushChild( Tag $component ) : void
    {
        $this->checkAllowParent( $component );
        $this->checkAllowChild( $component );

        $this->push( $component );
    }

    final public function pushText( string $text ) : void
    {
        $this->checkAllowText();

        $this->push( new Text( $text ) );
    }


    final protected function unshift( Tag|Text $component ) : void
    {
        array_unshift( $this->child, $component);
    }

    final public function unshiftChild( Tag $component ) : void
    {
        $this->checkAllowChild( $component );

        $this->unshift( $component );
    }

    final public function unshiftText( string $text ) : void
    {
        $this->checkAllowText();

        $this->unshift( new Text( $text ) );
    }



    public function setId( string $id ) : void
    {
        $this->attribute->id = $id;
    }

    public function addClass( string|array $class ) : void
    {
        if ( is_string($class) ) $class = [$class];
        $this->attribute->class = [ ...$this->attribute->class, ...$class ];
    }

    public function addData( string $data, string $name ) : void
    {
        $this->attribute->data[$name] = $data;
    }

    public function setLang( string $lang ) : void
    {
        $this->attribute->lang = $lang;
    }

    public function addOther( string $other, string $name ) : void
    {
        $this->attribute->other[$name] = $other;
    }

    public function setStyle( Style $style ) : void
    {
        $this->attribute->style = $style;
    }
}

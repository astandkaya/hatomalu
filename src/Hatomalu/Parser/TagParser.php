<?php

namespace Hatomalu\Parser;

use Hatomalu\Attribute\Attribute;

class TagParser extends BaseParser
{
    protected Attribute $attribute;
    protected array $child;

    public function exec() : string
    {
        $this->attribute = $this->content->getAttribute();
        $this->child = $this->content->getChild();

        return implode( self::SYMBOL_LF,
            array(
                $this->insertIndent( $this->genBeginTag() ),
                ...$this->child,
                $this->insertIndent( $this->genEndTag() ),
            ),
        );
    }

    protected function genTag() : string
    {
        return $this->insertSymbol(
            content:$this->content::TAG . $this->parseAttributes(),
            is_end:false
        );
    }

    private function genBeginTag() : string
    {
        return $this->genTag();
    }

    private function genEndTag() : string
    {
        return $this->insertSymbol(
            content:$this->content::TAG,
            is_end:true
        );
    }


    private function insertSymbol( string $content, bool $is_end = false ) : string
    {
        return self::SYMBOL_BEGIN . ($is_end ? self::SYMBOL_SLASH : '') . $content . self::SYMBOL_END;
    }

    private function insertQuotation( string $content ) : string
    {
        return self::SYMBOL_QUOTATION . $content . self::SYMBOL_QUOTATION;
    }


    private function parseAttributes() : string
    {
        $exist_attributes = array_keys( array_filter( get_object_vars( $this->attribute ) ) );

        $attributes = array_map(
            fn($e) => $this->{ 'parse'.ucfirst($e) }(),
            $exist_attributes,
        );

        return ( empty($attributes) ? '':' ' ) . implode( ' ', $attributes);
    }

    private function parseId() : string
    {
        return 'id='. $this->insertQuotation( $this->attribute->id );
    }

    private function parseClass() : string
    {
        return 'class='. $this->insertQuotation( implode( ' ', $this->attribute->class) );
    }

    private function parseData() : string
    {
        $data = [];
        foreach ($this->attribute->data as $key => $value) {
            $data[] = "data-{$key}=". $this->insertQuotation( $value );
        }

        return implode( ' ', $data );
    }

    private function parseLang() : string
    {
        return 'lang='. $this->insertQuotation( $this->attribute->lang );
    }

    private function parseOther() : string
    {
        $data = [];
        foreach ($this->attribute->other as $key => $value) {
            $data[] = $key.'='. $this->insertQuotation( $value );
        }

        return implode( ' ', $data );
    }

    private function parseSytle() : string
    {
        return '';
    }
}
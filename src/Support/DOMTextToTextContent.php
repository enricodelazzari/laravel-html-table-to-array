<?php

namespace EnricoDeLazzari\HtmlTableToArray\Support;

use DOMText;

class DOMTextToTextContent
{
    public function __invoke(DOMText $text): ?string
    {
        return static::make($text);
    }

    public static function make(DOMText $text): ?string
    {
        $text = trim($text->textContent);
        if (empty($text)) {
            return null;
        }

        return $text;
    }
}

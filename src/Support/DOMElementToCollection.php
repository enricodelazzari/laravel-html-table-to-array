<?php

namespace EnricoDeLazzari\HtmlTableToArray\Support;

use DOMElement;
use DOMText;
use Illuminate\Support\Collection;

class DOMElementToCollection
{
    public function __invoke(DOMElement|DOMText $tr): Collection|string|null
    {
        return static::make($tr);
    }

    public static function make(DOMElement|DOMText $element): Collection|string|null
    {
        if (! $element instanceof DOMElement) {
            return null;
        }

        return ListToCollection::make($element->childNodes)
            ->map(new self())
            ->filter()
            ->values()
            ->when(
                static::hasDOMTextChild($element),
                fn () => DOMTextToTextContent::make($element->childNodes[0])
            );
    }

    protected static function hasDOMTextChild(DOMElement $element): bool
    {
        if ($element->childNodes->count() > 1) {
            return false;
        }

        if (! $element->childNodes[0] instanceof DOMText) {
            return false;
        }

        return true;
    }
}

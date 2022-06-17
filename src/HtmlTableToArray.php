<?php

namespace EnricoDeLazzari\HtmlTableToArray;

use DOMDocument;
use DOMNodeList;
use DOMXPath;
use EnricoDeLazzari\HtmlTableToArray\Support\DOMElementToCollection;
use EnricoDeLazzari\HtmlTableToArray\Support\ListToCollection;

class HtmlTableToArray
{
    public function __construct(
        protected DOMNodeList $nodeList
    ) {
    }

    public function make(): array
    {
        $elements = ListToCollection::make($this->nodeList)
            ->map(callback: (new DOMElementToCollection())->filter(
                callback: fn ($element) => $element->nodeName !== 'th'
            ))
            ->first();

        $headings = ListToCollection::make($this->nodeList)
            ->map(callback: (new DOMElementToCollection())->filter(
                callback: fn ($element) => in_array($element->nodeName, ['tr', 'th'], true)
            ))
            ->flatten();

        return $elements
            ->map(fn ($items) => $headings->combine($items))
            ->toArray();
    }

    public static function fromHtml(string $html): self
    {
        $document = new DOMDocument();
        @$document->loadHTML($html);

        return static::fromDOMDocument($document);
    }

    public static function fromDOMDocument(DOMDocument $document): self
    {
        return static::fromDOMXPath(
            new DOMXPath($document)
        );
    }

    public static function fromDOMXPath(DOMXPath $xpath): self
    {
        return static::fromDOMNodeList(
            $xpath->query('//table')
        );
    }

    public static function fromDOMNodeList(DOMNodeList $nodeList): self
    {
        return new self(
            $nodeList
        );
    }
}

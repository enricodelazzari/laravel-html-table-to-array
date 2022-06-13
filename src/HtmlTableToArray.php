<?php

namespace EnricoDeLazzari\HtmlTableToArray;

use DOMDocument;
use DOMNodeList;
use DOMXPath;
use EnricoDeLazzari\HtmlTableToArray\Support\ListToCollection;
use EnricoDeLazzari\HtmlTableToArray\Support\DOMElementToCollection;

class HtmlTableToArray
{
    public function make(DOMNodeList $nodeList): array
    {
        return ListToCollection::make($nodeList)
            ->map(new DOMElementToCollection())
            ->toArray();
    }

    public static function fromHtml(string $html): array
    {
        $document = new DOMDocument();
        @$document->loadHTML($html);

        return static::fromDOMDocument($document);
    }

    public static function fromDOMDocument(DOMDocument $document): array
    {
        return static::fromDOMXPath(
            new DOMXPath($document)
        );
    }

    public static function fromDOMXPath(DOMXPath $xpath): array
    {
        return static::fromDOMNodeList(
            $xpath->query('//table')
        );
    }

    public static function fromDOMNodeList(DOMNodeList $nodeList): array
    {
        return (new self())->make($nodeList);
    }
}

<?php

namespace EnricoDeLazzari\HtmlTableToArray\Support;

use Closure;
use DOMElement;
use DOMText;
use Illuminate\Support\Collection;

class DOMElementToCollection
{
    protected ?Closure $filterCallback = null;

    public function __invoke(DOMElement|DOMText $element): Collection|string|null
    {
        return $this->make($element);
    }

    public function make(DOMElement|DOMText $element): Collection|string|null
    {
        if (! $element instanceof DOMElement) {
            return null;
        }

        $collection = ListToCollection::make($element->childNodes)
            ->filter(callback: $this->filterCallback ?? fn ($item) => true)
            ->map((new self())->filter($this->filterCallback))
            ->filter()
            ->values();

        if ($this->hasDOMTextChild($element)) {
            return DOMTextToTextContent::make($element->childNodes[0]);
        }

        if ($collection->isEmpty()) {
            return null;
        }

        return $collection;
    }

    protected function hasDOMTextChild(DOMElement $element): bool
    {
        if ($element->childNodes->count() > 1) {
            return false;
        }

        if (! $element->childNodes[0] instanceof DOMText) {
            return false;
        }

        return true;
    }

    public function filter(?Closure $callback = null): self
    {
        $this->filterCallback = $callback;

        return $this;
    }
}

<?php

namespace EnricoDeLazzari\HtmlTableToArray\Support;

use Illuminate\Support\Collection;
use IteratorAggregate;

class ListToCollection
{
    public function __invoke(IteratorAggregate $list): Collection
    {
        return static::make($list);
    }

    public static function make(IteratorAggregate $list): Collection
    {
        $collection = collect();

        foreach ($list as $item) {
            $collection->push($item);
        }

        return $collection;
    }
}

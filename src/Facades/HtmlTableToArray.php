<?php

namespace EnricoDeLazzari\HtmlTableToArray\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EnricoDeLazzari\HtmlTableToArray\HtmlTableToArray
 */
class HtmlTableToArray extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-html-table-to-array';
    }
}

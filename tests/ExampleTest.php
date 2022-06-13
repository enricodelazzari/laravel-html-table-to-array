<?php

use EnricoDeLazzari\HtmlTableToArray\HtmlTableToArray;

it(description: 'can convert base html table in array by row', closure: function (string $input, string $output) {
    $array = HtmlTableToArray::fromHtml(
        html: $this->getHtmlFileContent("{$input}.html")
    );

    expect($array[0])->toBe(
        $this->getJsonFileContent("{$output}.json")
    );
})->with([
    ['input' => 'base', 'output' => 'base-row'],
]);

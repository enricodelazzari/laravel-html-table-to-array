<?php

use EnricoDeLazzari\HtmlTableToArray\HtmlTableToArray;

it(description: 'can convert base html table in array by row', closure: function (string $input, string $output) {
    $html = $this->getHtmlFileContent("{$input}.html");
    $array = HtmlTableToArray::fromHtml($html)->make();

    expect($array)->toBe(
        $this->getJsonFileContent("{$output}.json")
    );
})->with([
    //['input' => 'base', 'output' => 'base-row'],
    ['input' => 'base-with-heading-row', 'output' => 'base-with-heading-row'],
]);

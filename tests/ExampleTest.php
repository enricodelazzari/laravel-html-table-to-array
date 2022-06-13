<?php

use EnricoDeLazzari\HtmlTableToArray\HtmlTableToArray;

it(description: 'can test', closure: function () {
    $array = HtmlTableToArray::fromHtml(
        html: $this->getHtmlFileContent('base.html')
    );

    expect($array[0])->toBe(
        $this->getJsonFileContent('base-row.json')
    );
});

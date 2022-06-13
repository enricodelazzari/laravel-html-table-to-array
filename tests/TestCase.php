<?php

namespace EnricoDeLazzari\HtmlTableToArray\Tests;

use EnricoDeLazzari\HtmlTableToArray\HtmlTableToArrayServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            HtmlTableToArrayServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        //
    }

    protected function getJsonFileContent(string $filename): array
    {
        $json = file_get_contents(
            __DIR__ . "/Support/Json/{$filename}"
        );

        return json_decode($json, true);
    }

    protected function getHtmlFileContent(string $filename): string
    {
        return file_get_contents(
            __DIR__ . "/Support/Html/{$filename}"
        );
    }
}

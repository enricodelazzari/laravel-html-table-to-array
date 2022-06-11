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
}

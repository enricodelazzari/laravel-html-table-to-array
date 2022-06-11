<?php

namespace EnricoDeLazzari\HtmlTableToArray\Tests;

use EnricoDeLazzari\HtmlTableToArray\HtmlTableToArrayServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'EnricoDeLazzari\\HtmlTableToArray\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            HtmlTableToArrayServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-html-table-to-array_table.php.stub';
        $migration->up();
        */
    }
}

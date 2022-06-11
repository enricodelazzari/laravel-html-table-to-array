<?php

namespace EnricoDeLazzari\HtmlTableToArray;

use EnricoDeLazzari\HtmlTableToArray\Commands\HtmlTableToArrayCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HtmlTableToArrayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-html-table-to-array')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-html-table-to-array_table')
            ->hasCommand(HtmlTableToArrayCommand::class);
    }
}

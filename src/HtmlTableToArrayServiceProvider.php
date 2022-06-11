<?php

namespace EnricoDeLazzari\HtmlTableToArray;

use EnricoDeLazzari\HtmlTableToArray\Commands\HtmlTableToArrayCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HtmlTableToArrayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-html-table-to-array')
            ->hasConfigFile();
    }
}

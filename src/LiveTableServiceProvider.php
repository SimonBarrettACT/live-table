<?php

namespace SimonBarrettACT\LiveTable;

use SimonBarrettACT\LiveTable\Commands\LiveTableCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LiveTableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('live-table')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_live-table_table')
            ->hasCommand(LiveTableCommand::class);
    }
}

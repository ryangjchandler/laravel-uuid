<?php

namespace Ryangjchandler\Uuid;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ryangjchandler\Uuid\Commands\UuidCommand;

class UuidServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-uuid')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-uuid_table')
            ->hasCommand(UuidCommand::class);
    }
}
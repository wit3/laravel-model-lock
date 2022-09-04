<?php

namespace Wit3\Locker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wit3\Locker\Commands\LockerCommand;

class LockerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-model-lock')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-model-lock_table')
            ->hasCommand(LockerCommand::class);
    }
}

<?php

namespace Thomascombe\LaravelObserverAttributes;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Thomascombe\LaravelObserverAttributes\Commands\LaravelObserverAttributesCommand;

class ObserverAttributesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel_observer_attributes')
            ->hasConfigFile();
    }
}

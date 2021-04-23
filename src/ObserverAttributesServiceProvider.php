<?php

namespace Thomascombe\ObserverAttributes;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->name('observer_attributes')
            ->hasConfigFile();
    }

    public function packageBooted()
    {
        $registrar = new ObserverRegistrar();
        $registrar->registerDirectory(app_path('Models'));
    }
}

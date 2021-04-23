<?php

namespace Thomascombe\ObserverAttributes;

use Illuminate\Support\Facades\File;
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
            ->name('observer-attributes')
            ->hasConfigFile();
    }

    public function packageBooted()
    {
        $registrar = new ObserverRegistrar();
        foreach (config('observer-attributes.directories', []) as $directory) {
            if (File::isDirectory($directory)) {
                $registrar->registerDirectory($directory);
            }
        }
    }
}

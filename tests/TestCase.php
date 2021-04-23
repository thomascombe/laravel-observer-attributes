<?php

namespace Thomascombe\ObserverAttributes\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Thomascombe\ObserverAttributes\ObserverAttributesServiceProvider;
use Thomascombe\ObserverAttributes\ObserverRegistrar;

class TestCase extends Orchestra
{
    protected ObserverRegistrar $observerRegistrar;

    public function setUp(): void
    {
        parent::setUp();

        $this->observerRegistrar = (new ObserverRegistrar());
        $this->observerRegistrar->setBaseNamespace('Thomascombe\ObserverAttributes\Tests');
        $this->observerRegistrar->setBasePath(__DIR__);
        $this->observerRegistrar->registerDirectory($this->getTestPath('TestObservers/Models'));
    }

    protected function getPackageProviders($app): array
    {
        return [
            ObserverAttributesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }

    public function getTestPath(string $directory = null): string
    {
        return __DIR__ . ($directory ? '/' . $directory : '');
    }
}

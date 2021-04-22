<?php

namespace Thomascombe\LaravelObserverAttributes;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thomascombe\LaravelObserverAttributes\LaravelObserverAttributes
 */
class LaravelObserverAttributesFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel_observer_attributes';
    }
}

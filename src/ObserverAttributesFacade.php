<?php

namespace Thomascombe\LaravelObserverAttributes;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thomascombe\LaravelObserverAttributes\ObserverAttributes
 */
class ObserverAttributesFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel_observer_attributes';
    }
}

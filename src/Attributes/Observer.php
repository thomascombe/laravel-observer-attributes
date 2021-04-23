<?php

namespace Thomascombe\ObserverAttributes\Attributes;

use Attribute;
use Illuminate\Support\Arr;

#[Attribute(Attribute::TARGET_CLASS)]
class Observer
{
    public array $observers;

    public function __construct(string ...$observers)
    {
        $this->observers = Arr::wrap($observers);
    }
}

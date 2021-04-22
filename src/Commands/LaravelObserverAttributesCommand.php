<?php

namespace Thomascombe\LaravelObserverAttributes\Commands;

use Illuminate\Console\Command;

class LaravelObserverAttributesCommand extends Command
{
    public $signature = 'laravel_observer_attributes';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}

<?php

namespace Thomascombe\ObserverAttributes\Tests\TestObservers\Observers;

use Thomascombe\ObserverAttributes\Tests\TestObservers\Models\MyModel;

class ModelObserver
{
    public function saving(MyModel $model) {
        throw new \Exception('saving triggered');
    }
}

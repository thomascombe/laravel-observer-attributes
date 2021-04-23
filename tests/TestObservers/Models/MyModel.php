<?php

namespace Thomascombe\ObserverAttributes\Tests\TestObservers\Models;

use Illuminate\Database\Eloquent\Model;
use Thomascombe\ObserverAttributes\Attributes\Observer;
use Thomascombe\ObserverAttributes\Tests\TestObservers\Observers\ModelObserver;

#[Observer(ModelObserver::class)]
class MyModel extends Model
{

}

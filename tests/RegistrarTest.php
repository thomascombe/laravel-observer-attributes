<?php

namespace Thomascombe\ObserverAttributes\Tests;

use Thomascombe\ObserverAttributes\Tests\TestObservers\Models\MyModel;

class RegistrarTest extends \Thomascombe\ObserverAttributes\Tests\TestCase
{
    public function testRegistrar()
    {
        $model = new MyModel();

        try {
            $model->save();
        } catch (\Exception $exception) {
            $this->assertEquals('saving triggered', $exception->getMessage());
            return;
        }
        $this->assertTrue(false);
    }
}

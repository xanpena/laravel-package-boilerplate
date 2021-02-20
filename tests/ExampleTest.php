<?php

namespace Xanpena\LaravelPackageBoilerplate\Tests;

use Orchestra\Testbench\TestCase;
use Xanpena\LaravelPackageBoilerplate\LaravelPackageBoilerplateServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app) {
        return [LaravelPackageBoilerplateServiceProvider::class];
    }

    /** @test */
    public function true_is_true() {
        $this->assertTrue(true);
    }
}

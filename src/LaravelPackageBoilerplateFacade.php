<?php

namespace Xanpena\LaravelPackageBoilerplate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Xanpena\LaravelPackageBoilerplate\LaravelPackageBoilerplateClass
 */
class LaravelPackageBoilerplateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'Laravelpackageboilerplate';
    }
}

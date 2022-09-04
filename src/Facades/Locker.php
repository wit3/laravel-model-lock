<?php

namespace Wit3\Locker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wit3\Locker\Locker
 */
class Locker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Wit3\Locker\Locker::class;
    }
}

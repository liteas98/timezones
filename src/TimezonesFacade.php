<?php

namespace Liteas98\Timezones;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Liteas98\Timezones\Skeleton\SkeletonClass
 */
class TimezonesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'timezones';
    }
}

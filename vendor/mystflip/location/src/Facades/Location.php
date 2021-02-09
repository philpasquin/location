<?php

namespace Mystflip\Location\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Mystflip\Location\Position|bool get(string $ip = null)
 * @method static void setDriver(\Mystflip\Location\Drivers\Driver $driver)
 *
 * @see \Mystflip\Location\Location
 */
class Location extends Facade
{
    /**
     * The IoC key accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'location';
    }
}

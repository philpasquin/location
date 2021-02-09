<?php

namespace App\Tags;

use Statamic\Tags\Tags;
use Mystflip\Location\Facades\Location;

class UserLocation extends Tags
{
    /**
     * The {{ user_location:country }} tag.
     *
     * @return string|array
     */
    public function country()
    {
        $position = Location::get();
        return $position->countryName;
    }
    

    /**
     * The {{ user_location:city }} tag.
     *
     * @return string|array
     */
    public function city()
    {
        $position = Location::get();
        return $position->cityName;
    }
}

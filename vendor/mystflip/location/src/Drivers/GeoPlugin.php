<?php

namespace Mystflip\Location\Drivers;

use Exception;
use Illuminate\Support\Fluent;
use Mystflip\Location\Position;

class GeoPlugin extends Driver
{
    /**
     * {@inheritdoc}
     */
    protected function url($ip)
    {
        return "http://www.geoplugin.net/php.gp?ip=$ip";
    }

    /**
     * {@inheritdoc}
     */
    protected function hydrate(Position $position, Fluent $location)
    {
        $position->countryCode = $location->geoplugin_countryCode;
        $position->countryName = $location->geoplugin_countryName;
        $position->regionName = $location->geoplugin_regionName;
        $position->regionCode = $location->geoplugin_regionCode;
        $position->cityName = $location->geoplugin_city;
        $position->latitude = $location->geoplugin_latitude;
        $position->longitude = $location->geoplugin_longitude;
        $position->areaCode = $location->geoplugin_areaCode;

        return $position;
    }

    /**
     * {@inheritdoc}
     */
    protected function process($ip)
    {
        try {
            $response = unserialize($this->getUrlContent($this->url($ip)));

            return new Fluent($response);
        } catch (Exception $e) {
            return false;
        }
    }
}

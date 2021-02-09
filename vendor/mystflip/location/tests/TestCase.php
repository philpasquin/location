<?php

namespace Mystflip\Location\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Mystflip\Location\LocationServiceProvider;

class TestCase extends BaseTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function getPackageProviders($app)
    {
        return [LocationServiceProvider::class];
    }
}

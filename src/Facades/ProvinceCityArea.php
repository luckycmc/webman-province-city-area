<?php

namespace Luckycmc\WebmanProvinceCityArea\Facades;

use Luckycmc\WebmanProvinceCityArea\Facades\Accessor\ProvinceCityAreaAccessor;

class ProvinceCityArea extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ProvinceCityAreaAccessor::class;
    }
}

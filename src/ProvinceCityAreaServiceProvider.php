<?php

namespace Luckycmc\WebmanProvinceCityArea;

use Illuminate\Support\ServiceProvider;

class ProvinceCityAreaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('provincecityarea', function () {
            return new ProvinceCityArea();
        });
    }
}
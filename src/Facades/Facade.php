<?php
namespace Luckycmc\WebmanProvinceCityArea\Facades;
use Illuminate\Support\Facades\Facade as MainFacade;
use support\Container;

class Facade extends MainFacade
{
    /**
     * 重写私有魔术方法
     *
     * @return mixed
     */
    public static function __callStatic($method, $args)
    {
        if (!Container::has(static::getFacadeAccessor())) {
            Container::make(static::getFacadeAccessor(), $args);
        }
        return Container::get(static::getFacadeAccessor())->$method(...$args);
    }
}
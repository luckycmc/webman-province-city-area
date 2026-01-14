# Webman-Province-City-Area   「全国省市县乡镇街道」数据(数据来源于京东，内置爬虫，可自行获取最新数据)
## 致谢
本项目基于https://github.com/9yearfish/laravel-province-city-area 修改，非常感谢原作者的贡献

## 安装
```
composer require luckycmc/webman-province-city-area
```

## 使用
### 执行数据库迁移
```
php webman migrate
```
### 获取数据
```
php webman pca:refreshData file|jd
```

## Demo
```php
<?php

namespace app\controller;

use Luckycmc\WebmanProvinceCityArea\Facades\ProvinceCityArea;

class IndexController
{
    public function getProvinceList()
    {
        return json(ProvinceCityArea::getProvinceList());
    }
    
    public function getProvince()
    {
        return json(ProvinceCityArea::getProvinceList());
    }

    public function getCity($provinceId)
    {
        if (empty($provinceId)) {
            return ->json([]);
        }
        return json(ProvinceCityArea::getCityList($provinceId));
    }

    public function getArea($cityId)
    {
        if (empty($cityId)) {
            return json([]);
        }
        return json(ProvinceCityArea::getAreaList($cityId));
    }
    
    
    public function getAllProvince()
    {
        return json(ProvinceCityArea::getAllProvince());
    }
    
    public function getAllCity()
    {
        return json(ProvinceCityArea::getAllCity());
    }
    public function getAllArea()
    {
        return json(ProvinceCityArea::getAllArea());
    }
    public function getAllStreet()
    {
        return json(ProvinceCityArea::getAllStreet());
    }
}

```
# Webman-Province-City-Area   「全国省市县乡镇街道」数据(数据来源于京东，内置爬虫，可自行获取最新数据)
## 致谢
本项目基于https://github.com/9yearfish/laravel-province-city-area修改而来，非常感谢原作者的贡献

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
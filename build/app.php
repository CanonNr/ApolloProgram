<?php
/**
 * 首先引入Composer相关依赖
 */
require_once __DIR__.'/../vendor/autoload.php';

// 读取配置文件
(new Canon\Framework\Boot\Configuration())->load();

// 配置容器

$app = new \Canon\Framework\Application();

dump($app);
// 路由设置
require '../app/routes.php';

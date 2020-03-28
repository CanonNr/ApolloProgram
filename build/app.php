<?php

// 首先引入Composer相关依赖
require_once __DIR__.'/../vendor/autoload.php';

// 读取配置文件
(new Canon\Framework\Boot\Configuration())->load();

// 配置容器
$app = new Canon\Framework\Application();

// 路由配置
$router = $app->router->CreateRouter();

require_once __DIR__.'/../app/routes.php';

// Rpc Service
require_once __DIR__.'/../app/Rpc/rpc.php';

// 返回容器
return $app;


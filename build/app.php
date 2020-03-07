<?php
/**
 * 首先引入Composer相关依赖
 */
require_once __DIR__.'/../vendor/autoload.php';

// 读取配置文件
(new Canon\Framework\Boot\Configuration())->load();

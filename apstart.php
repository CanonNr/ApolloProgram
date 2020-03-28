<?php
use Canon\Framework\Command\Runner;

// 引入自动加载
require_once __DIR__.'/vendor/autoload.php';

$args = $argv;
array_shift($args);

Runner::start();







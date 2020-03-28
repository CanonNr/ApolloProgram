<?php
use Canon\Framework\Command\Runner;

// 引入自动加载
require_once __DIR__.'/vendor/autoload.php';

$rpcServer = new App\Server\RpcServer('127.0.0.1',9501);
$rpcServer->handle();
//die();
//$args = $argv;
//array_shift($args);
//
//Runner::start();







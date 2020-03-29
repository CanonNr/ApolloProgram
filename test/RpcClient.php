<?php
use Canon\Rpc\Client\Client;
// 引入自动加载
require_once '../vendor/autoload.php';



$client = new Client();
$result = $client::getInstance()->set('127.0.0.1',9501)->class("test")->get(1);

var_dump($result.'222');
//$client::getInstance()->set(1,1)->class("test")->get(1);
//var_dump($client);
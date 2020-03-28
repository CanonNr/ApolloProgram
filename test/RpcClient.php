<?php
use Canon\Rpc\Client\Client;
// 引入自动加载
require_once '../vendor/autoload.php';



$client = new Client(1,1);
$client->class("asd")->test(1);
//var_dump($client);
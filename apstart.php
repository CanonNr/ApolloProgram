<?php
require_once __DIR__.'/vendor/autoload.php';

use App\Server\ExampleServer;
$ExampleServer = new ExampleServer();

$server = new Swoole\Server('127.0.0.1','8600');
$ExampleServer->handle($server);
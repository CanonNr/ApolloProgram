<?php

namespace App\Server;

use swoole_server;
use Canon\Rpc\Server\Server;

/**
 * @Server()
 */
class RpcServer extends Server
{
    public $host;

    public $port;

    public $config;

    public function handle()
    {

        $server = new \Swoole\Server($this->host, $this->port);

        $server->set([]);

        //监听连接进入事件
        $server->on('Connect', function ($server, $fd) {
            echo "Client: Connect.\n";
        });
        //监听数据接收事件
        $server->on('Receive', [$this, 'receive']);

        //监听连接关闭事件
        $server->on('Close', function ($server, $fd) {
            echo "Client: Close.\n";
        });
        //启动服务器
        $this->serverInfo($server);
        $server->start();

    }

    public function serverInfo(swoole_server $server)
    {
        echo("---------------- 服 务 已 启 动 ----------------" . PHP_EOL);
        echo("host: ".$server->host."" . PHP_EOL);
        echo("port: ".$server->port."" . PHP_EOL);
        echo("---------------- 服 务 已 启 动 ----------------" . PHP_EOL);

    }
}
<?php

namespace App\Server;

use Swoole\Server as Server;
use swoole_server;

/**
 * @Server()
 */
class RpcServer
{
    public function handle()
    {

        $server = new Server("127.0.0.1", 9501);

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

    public function receive(swoole_server $server, $fd, $reactor_id, $data)
    {
        var_dump($server->host);
        var_dump($data);
    }

    public function serverInfo(swoole_server $server)
    {
        echo("---------------- 服 务 已 启 动 ----------------" . PHP_EOL);
        echo("host: ".$server->host."" . PHP_EOL);
        echo("port: ".$server->port."" . PHP_EOL);

    }
}
<?php

namespace App\Server;

use App\Model\Example;
use Swoole\Server as Server;

/**
 * @Server()
 */
class ExampleServer
{
    public function handle(Server $server)
    {
        $server = new Server("127.0.0.1", 9501);

        //监听连接进入事件
        $server->on('Connect', function ($server, $fd) {
            echo "Client: Connect.\n";
        });

        //监听数据接收事件
        $server->on('Receive', function ($server, $fd, $from_id, $data) {
            echo $data;
            $server->send($fd, "Server: ".$data);
        });

        //监听连接关闭事件
        $server->on('Close', function ($server, $fd) {
            echo "Client: Close.\n";
        });

        //启动服务器
        $server->start();

    }
}
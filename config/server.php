<?php

    return [

        'ExampleServer' => [
            'host' => '0.0.0.0',
            'port' => '8600',
            'type' => SWOOLE_SOCK_UDP
        ],

        'Rpc' => [
            'host' => '0.0.0.0',
            'port' => '9501',
            'type' => SWOOLE_SOCK_TCP,
            'config'=>[

            ]
        ],
    ];
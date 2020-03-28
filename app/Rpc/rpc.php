<?php

namespace App\Rpc;

use Canon\Rpc\Base\Register;
class rpc extends Register
{
    public function setService()
    {
        return [
            'get'   =>  'App\Rpc\template\get::class'
        ];
    }
}
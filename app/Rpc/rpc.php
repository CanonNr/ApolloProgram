<?php

namespace App\Rpc;

use Canon\Rpc\Base\Register;
class rpc extends Register
{
    public function setService()
    {
        return [
            'test'   =>  'App\Rpc\template\test::class'
        ];
    }
}
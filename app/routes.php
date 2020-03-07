<?php
    $router::get('/',function (){
        echo env("APP_NAME");
    });

    $router::dispatch();
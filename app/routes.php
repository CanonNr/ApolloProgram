<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function() {
    echo env("APP_NAME");
});

Macaw::dispatch();
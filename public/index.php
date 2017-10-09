<?php

use App\Bootstrap\Bootstrap;

require __DIR__ . "/../storage/vendor/autoload.php";
$app = Bootstrap::application();

if (is_file($file = $app->make(App\Home\Index::class)->handle())) {
    require $file;
}
<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Main;
$arg1 = $argv[1] ?? null;
$arg2 = $argv[2] ?? null;
$arg3 = $argv[3] ?? null;

try {
    $main = new Main($arg1, $arg2, $arg3);
    echo $main->check();
} catch (Exception $e) {
    echo $e->getMessage();
}


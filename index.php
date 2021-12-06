<?php
require __DIR__ . "/vendor/autoload.php";

include "connect.php";
global $connect;

$app = new App\App($connect);
$app->run($connect);


<?php
require __DIR__."/vendor/autoload.php";

use Source\Database\Connect;

$pdo = Connect::getInstance();
var_dump($pdo);
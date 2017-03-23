<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require ("vendor/autoload.php");

use Pux\Executor;

$mux = require ("route/mux.php");
$route = $mux -> dispatch($_SERVER['DOCUMENT_URI']);

Executor::execute($route);
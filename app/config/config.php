<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

// -------------------------------------------------- //
// APP CONFIG
// -------------------------------------------------- //

define("APP_NAME", "my_app");
define("DEBUG", true);

// -------------------------------------------------- //
// FLIGHT CONFIG
// -------------------------------------------------- //

Flight::set("flight.views.path", __DIR__ . "/../resources/views/");

// -------------------------------------------------- //
// MONOLOG
// -------------------------------------------------- //

$logger = new Logger(APP_NAME);

$logger->pushHandler(new StreamHandler(__DIR__ . "/../logs/application.log", Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

// -------------------------------------------------- //
// ROUTES
// -------------------------------------------------- //

require_once("routes.php");

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

define("FLIGHT_SET_VARS", [
    'flight.views.path' => __DIR__ . "/../resources/views/"
]);

// -------------------------------------------------- //
// MONOLOG
// -------------------------------------------------- //

define("LOG_HANDLERS", [
    new StreamHandler(__DIR__ . "/../../var/logs/application.log", Logger::DEBUG),
    new FirePHPHandler(),
]);


// -------------------------------------------------- //
// TWIG TEMPLATES
// -------------------------------------------------- //

define("TWIG_CONFIG", [
    "cache" => __DIR__ . "/../../var/cache/twig/",
    "debug" => DEBUG,
]);

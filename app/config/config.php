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

$logger->pushHandler(new StreamHandler(__DIR__ . "/../../var/logs/application.log", Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

// -------------------------------------------------- //
// TWIG TEMPLATES
// -------------------------------------------------- //

$twig_loader = new Twig_Loader_Filesystem(Flight::get("flight.views.path"));
$twig_config = [
    "cache" => __DIR__ . "/../../var/cache/twig/",
    "debug" => DEBUG,
];

Flight::register("view", "Twig_Environment", [ $twig_loader, $twig_config ], function ($twig) {
    $twig->addExtension(new Twig_Extensions_Extension_Text());

    if (function_exists("collator_create")) {
        $twig->addExtension(new Twig_Extensions_Extension_Intl());
    }

    if (DEBUG) {
        $twig->addExtension(new Twig_Extension_Debug());
    }
});

// -------------------------------------------------- //
// ROUTES
// -------------------------------------------------- //

require_once("routes.php");

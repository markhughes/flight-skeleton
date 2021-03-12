<?php

// -------------------------------------------------- //
// INIT
// -------------------------------------------------- //

require_once(__DIR__ . "/../vendor/autoload.php");
require_once(__DIR__ . "/../app/config/config.php");
require_once(__DIR__ . "/../app/config/log_handlers.php");
require_once(__DIR__ . "/../app/config/routes.php");

// -------------------------------------------------- //
// LOGIC
// -------------------------------------------------- //

// Setup flight vars
foreach (FLIGHT_SET_VARS as $key => $value) {
    Flight::set($key, $value);
}

// Setup logger
$logger = new \Monolog\Logger(APP_NAME);

foreach (create_log_handlers() as $logHandler) {
    $logger->pushHandler($logHandler);
}

// Configure Twig with Flight
$twig_loader = new \Twig\Loader\FilesystemLoader(Flight::get("flight.views.path"));

Flight::register("view", "Twig_Environment", [ $twig_loader, TWIG_CONFIG ], function ($twig) {
    $twig->addExtension(new Twig_Extensions_Extension_Text());

    if (function_exists("collator_create")) {
        $twig->addExtension(new Twig_Extensions_Extension_Intl());
    }

    if (DEBUG) {
        $twig->addExtension(new \Twig\Extension\DebugExtension());
    }
});

// Lets go!
Flight::start();

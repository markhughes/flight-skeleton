<?php

// -------------------------------------------------- //
// INIT
// -------------------------------------------------- //

require_once(__DIR__ . "/../vendor/autoload.php");
require_once(__DIR__ . "/../app/config/config.php");
require_once(__DIR__ . "/../app/config/log_handlers.php");
require_once(__DIR__ . "/../app/logger.php");
require_once(__DIR__ . "/../app/config/routes.php");

// -------------------------------------------------- //
// LOGIC
// -------------------------------------------------- //

// Setup flight vars
foreach (FLIGHT_SET_VARS as $key => $value) {
    Flight::set($key, $value);
}

// Configure Twig with Flight
$twig_loader = new \Twig\Loader\FilesystemLoader(Flight::get("flight.views.path"));

Flight::register("view", "Twig\Environment", [ $twig_loader, TWIG_CONFIG ], function ($twig) {
    if (DEBUG) {
        $twig->addExtension(new \Twig\Extension\DebugExtension());
    }
});

// Lets go!
Flight::start();

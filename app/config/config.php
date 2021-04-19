<?php

// -------------------------------------------------- //
// APP CONFIG
// -------------------------------------------------- //

define("APP_NAME", "my_app");
define("DEBUG", true);

//... add more here for your app!

// -------------------------------------------------- //
// FLIGHT CONFIG
// -------------------------------------------------- //

define("FLIGHT_SET_VARS", [
    'flight.views.path' => __DIR__ . "/../resources/views/"
]);

// -------------------------------------------------- //
// TWIG TEMPLATES
// -------------------------------------------------- //

define("TWIG_CONFIG", [
    "cache" => __DIR__ . "/../../var/cache/twig/",
    "debug" => DEBUG,
]);

<?php

// -------------------------------------------------- //
// APP CONFIG
// -------------------------------------------------- //

define("APP_NAME", "my_app");
define("DEBUG", true);
define("TEMPLATE_ENGINE", "twig"); // can be twig or latte

//... add more here for your app!

// -------------------------------------------------- //
// FLIGHT CONFIG
// -------------------------------------------------- //

define("FLIGHT_SET_VARS", [
    'flight.views.path' => __DIR__ . "/../resources/views/"
]);

// -------------------------------------------------- //
// TWIG CONFIG
// -------------------------------------------------- //
// Not using Twig? Remove this section! 

if (TEMPLATE_ENGINE === "twig") {
    define("TWIG_CONFIG", [
        "cache" => __DIR__ . "/../../var/cache/twig/",
        "debug" => DEBUG,
    ]);
}

// -------------------------------------------------- //
// LATTE CONFIG
// -------------------------------------------------- //
// Not using Latte? Remove this section! 

if (TEMPLATE_ENGINE === "latte") {
    define("LATTE_CACHE_DIR", __DIR__ . "/../../var/cache/latte/");
}

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


// -------------------------------------------------- //
// TWIG
// -------------------------------------------------- //
// Not using Twig? Remove this section! 

if (TEMPLATE_ENGINE === "twig") {
    // Configure Twig with Flight
    $twig_loader = new \Twig\Loader\FilesystemLoader(Flight::get("flight.views.path"));

    Flight::register("view", "Twig\Environment", [$twig_loader, TWIG_CONFIG], function ($twig) {
        if (DEBUG) {
            $twig->addExtension(new \Twig\Extension\DebugExtension());
        }
    });

    Flight::map('render', function (string $template, array $data): void {
        echo Flight::view()->render($template . ".twig", $data);
    });
}

// -------------------------------------------------- //
// LATTE
// -------------------------------------------------- //
// Not using Latte? Remove this section!
if (TEMPLATE_ENGINE === "latte") {
    // Configure Latte with Flight
    Flight::register('view', Latte\Engine::class, [], function (Latte\Engine $latte) {
        $latte->setTempDirectory(LATTE_CACHE_DIR);

        // Tell Latte where the root directory for your views will be at.
        $latte->setLoader(new \Latte\Loaders\FileLoader(Flight::get("flight.views.path")));
    });

    Flight::map('render', function (string $template, array $data): void {
        echo Flight::view()->render($template . ".latte", $data);
    });
}
// Lets go!
Flight::start();

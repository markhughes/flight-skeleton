<?php

// -------------------------------------------------- //
// ROUTES
// -------------------------------------------------- //

Flight::route("/", ["\Acme\Demo\Controller\Demo", "index"]);

// -------------------------------------------------- //
// MAPPINGS
// -------------------------------------------------- //

Flight::map("notFound", fn() => Flight::render("404", []));

Flight::map("error", fn(Exception $exception) => $logger->error($exception));

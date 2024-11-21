<?php

// -------------------------------------------------- //
// ROUTES
// -------------------------------------------------- //

Flight::route("/", ["\Acme\Demo\Controllers\Demo", "index"]);
Flight::route("/api/message", ["\Acme\Demo\Controllers\API", "message"]);

// -------------------------------------------------- //
// MAPPINGS
// -------------------------------------------------- //

Flight::map("notFound", fn() => Flight::render("404", []));

Flight::map("error", fn(Throwable $exception) => $logger->error($exception));

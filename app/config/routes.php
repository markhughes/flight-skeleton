<?php

// -------------------------------------------------- //
// ROUTES
// -------------------------------------------------- //

Flight::route("/", array("\Acme\Demo\Controller\Demo", "index"));

// -------------------------------------------------- //
// MAPPINGS
// -------------------------------------------------- //

Flight::map("notFound", function() {
	Flight::render("404", []);
});

Flight::map("error", function($exception) {
	global $logger;

	$logger->error($exception);
});

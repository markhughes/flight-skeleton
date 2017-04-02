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

Flight::map("error", function($e) {
	switch ($e->getCode()) {
		case E_ERROR:
		case E_USER_ERROR:
		case E_CORE_ERROR:
			break;
		case E_WARNING:
		case E_USER_WARNING:
		case E_CORE_WARNING:
			break;
		case E_NOTICE:
		case E_USER_NOTICE:
			break;
		default:
	}
});

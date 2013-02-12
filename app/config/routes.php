<?php

//Routes of the application.
\Flight::route('/', array('\Acme\Demo\Controller\Demo', 'index'));

//Mappings.
\Flight::map('notFound', function() {
	\Flight::render('404', array(), 'content');
	\Flight::render('layout', array());
});

\Flight::map('error', function(\Exception $e) {
	//You probably want to log the error.
	switch($e->getCode()) {
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
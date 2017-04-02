<?php

namespace Acme\Demo\Controller;

use Flight;

class Demo {

	static public function index() {
		Flight::render("index", [], "content");
		Flight::render("layout", []);
	}

}

<?php

namespace Acme\Demo\Controller;


class Demo {


	static public function index() {
		\Flight::render('index', array(), 'content');
		\Flight::render('layout', array());
	}

}

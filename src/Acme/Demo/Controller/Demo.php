<?php

namespace Acme\Demo\Controller;

use Flight;

class Demo {

    static public function index() {
        Flight::view()->display("index.twig", []);
    }

}

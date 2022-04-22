<?php

namespace Acme\Demo\Controller;

use Flight;

class Demo
{
    public static function index(): void
    {
        Flight::view()->display("index.twig", []);
    }
}

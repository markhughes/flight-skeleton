<?php

namespace Acme\Demo\Controller;

use Flight;
class Demo
{
    public static function index()
    {
        Flight::view()->render("index.twig", []);
    }
}

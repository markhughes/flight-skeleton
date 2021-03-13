<?php

namespace Acme\Demo\Controller;

use Flight;
use Flight\template\View;
class Demo
{
    public static function index(): void
    {
        Flight::view()->display("index.twig", []);
    }
}

<?php

namespace Acme\Demo\Controller;

use Flight;

class Demo
{
    public static function index(): void
    {
        $context = [
            "introduction_title" => "Hello world!",
            "introduction_text" => "This is the skeleton for a Flight app."
        ];

        Flight::view()->display("index.twig", $context);
    }
}

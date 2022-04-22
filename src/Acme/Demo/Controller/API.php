<?php

namespace Acme\Demo\Controller;

use Flight;
use Flight\template\View;

class API
{
    public static function message(): void
    {
        Flight::json([
            'message' => 'An example API route!'
        ]);
    }
}

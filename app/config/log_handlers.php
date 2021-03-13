<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

function create_log_handlers()
{
    return [
        new StreamHandler(__DIR__ . "/../../var/logs/application.log", Logger::DEBUG),
        new FirePHPHandler(),
    ];
}

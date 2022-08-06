<?php

// Setup logger
$logger = new \Monolog\Logger(APP_NAME);
foreach (create_log_handlers() as $logHandler) {
    $logger->pushHandler($logHandler);
}

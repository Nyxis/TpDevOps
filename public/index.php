<?php

require './../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\GelfHandler;
use Gelf\Transport\TcpTransport;
use Gelf\Publisher;

// @see https://github.com/PHPMailer/PHPMailer?tab=readme-ov-file#a-simple-example
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$logger = new Logger('my_logger');
$logger->pushHandler(
    new GelfHandler(
        new Publisher(
            new TcpTransport('logstash', 5000)
        )
    )
);

echo "Hello World !";

$logger->info('Hello world !', [
    'lorem' => 'ipsum'
]);

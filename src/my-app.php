<?php
require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use W1E\My\ClassName;

$log = new Logger('my_app');
$log->pushHandler(new StreamHandler('php://stderr', Logger::WARNING));

$log->warning('This is a warning.');

$myClass = new ClassName();
echo $myClass->doSomething();
?>
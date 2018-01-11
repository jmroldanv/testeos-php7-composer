<?php
require __DIR__.'/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

echo "<br>Using Monolog";
echo "<br>... generating 'monolog.log' file";

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(__DIR__.'/monolog.log', Logger::WARNING));
// add records to the log
$log->warning('Foo');
$log->error('Bar');
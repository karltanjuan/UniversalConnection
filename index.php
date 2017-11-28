<?php

require "vendor/autoload.php";

use Symfony\Component\Dotenv\Dotenv;
use \Whoops\Run;
use App\IConnection;
use App\UniversalConnection;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$whoops = new Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$uc = new UniversalConnection();
$uc->activateDB();

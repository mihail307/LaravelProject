<?php
/**
 * Laravel - A PHP Framework
 *
 * @package  Laravel
 * @author   Mihail Iacob
 */


require __DIR__.'/../bootstrap/autoload.php';



$app = require_once __DIR__.'/../bootstrap/start.php';



$app->run();


$app->shutdown();
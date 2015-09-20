<?php

/**
 * Require Composer autoloader
 */
$autoload = __DIR__ . '/../vendor/autoload.php';

if (!file_exists($autoload)) {

    throw new Exception('Run composer install.');

}

require_once $autoload;

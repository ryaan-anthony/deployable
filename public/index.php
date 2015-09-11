<?php

define('DEPLOYABLE_ROOT', __DIR__ . '/../');

require_once DEPLOYABLE_ROOT.'src/helpers.php';

/**
 * Require Composer autoloader
 */
$autoloader = DEPLOYABLE_ROOT.'vendor/autoload.php';

if (!file_exists($autoloader)) {
    view('error.php', ['error' => 'Run composer install.']);
    exit;
}

require_once $autoloader;

/**
 * Run the application
 */
require_once DEPLOYABLE_ROOT.'src/app.php';

view('stats.php', ['message' => 'Deployable is running...']);

<?php


define('DEPLOYABLE_ROOT', __DIR__ . '/../');

require_once DEPLOYABLE_ROOT.'src/helpers.php';

/**
 * Composer autoloader
 */
$autoloader = DEPLOYABLE_ROOT.'vendor/autoload.php';

if (file_exists($autoloader)) {
    view('error.php', ['error' => 'Run composer install.']);
    exit;
}

require $autoloader;

<?php

/**
 * Bootstrap the Application
 */
require_once __DIR__ . '/bootstrap/autoload.php';

use Deployable\Agent;

$agent = new Agent();

while ($agent->scan()) { /** Run PHP like a daemon. */ }

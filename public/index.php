<?php

/**
 * Bootstrap the Application
 */
require_once __DIR__ . '/../bootstrap/autoload.php';

use Deployable\App;
use Deployable\Http\Input\Web as WebInput;
use Deployable\Http\Output\Web as WebOutput;
use Deployable\Config\Reader\Xml;

/**
 * Create the Input object
 */
$input = new WebInput($_POST + $_GET);

/**
 * Create the Output object
 */
$output = new WebOutput();

/**
 * Set the response template
 */
$output->setTemplate(__DIR__ . '/../views/index.html.php');

/**
 * Create the config reader
 */
$config = new Xml();

/**
 * Create the Application
 */
$app = new App($config);

/**
 * Run the Application
 */
$app->run($input, $output);

/**
 * Return the Output object
 */
echo $output;

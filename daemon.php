<?php

use Deployable\Agent;

$agent = new Agent();

while ($agent->scan()) { /** Run PHP like a daemon. */ }

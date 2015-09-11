<?php

$httpFactory = new Deployable\Services\HttpFactory;

$input = $httpFactory->getInput();

$stateValue = $input->getValue('state');

if ($stateValue) {

    $stateClass = "Deployable\\States\\" . ucwords($stateValue);

    if (class_exists($stateClass)) {

        /** @var Deployable\Contracts\State $state */
        $state = new $stateClass($input);

        $state->touch();

    }

}

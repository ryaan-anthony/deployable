<?php
namespace Deployable\Services;

use Deployable\Http\Input;

class HttpFactory
{
    /**
     * @returns Input
     */
    public function getInput()
    {
        $filteredInput = filter_var_array($_POST, FILTER_SANITIZE_STRING);

        return new Input($filteredInput);
    }
}

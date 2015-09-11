<?php
namespace Deployable\Services;

use Deployable\Contracts\Input;

class HttpFactory
{
    /**
     * @returns Input
     */
    public function getInput()
    {
        $inputClass = $this->getInputClass();

        /** @var Input $inputObject */
        $inputObject = new $inputClass();

        $rawInput = $inputObject->getParams();

        $filteredInput = $this->filterArray($rawInput);

        $inputObject->setParams($filteredInput);
    }

    /**
     * @param array $array
     * @return array
     */
    protected function filterArray(array $array = [])
    {
        return filter_var_array($array, FILTER_SANITIZE_STRING);
    }

    /**
     * @return string
     */
    protected function getInputClass()
    {
        return php_sapi_name() == "cli" ?
            "Deployable\\Http\\Input\\Console" :
            "Deployable\\Http\\Input\\Web";
    }

}

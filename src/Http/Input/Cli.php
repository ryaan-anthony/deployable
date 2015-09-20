<?php
namespace Deployable\Http\Input;

use Deployable\Http\Input;

class Cli extends Input
{

    /**
     * Add filter for cli requests
     * @param array $args
     * @return array
     */
    protected function filterParams(array $args = [])
    {
        $filteredArray = $this->filterCliParams($args);

        return parent::filterParams($filteredArray);
    }

    /**
     * Apply cli argument filter
     * @param array $args
     * @return array
     */
    protected function filterCliParams(array $args = [])
    {
        unset($args[0]);

        $filteredArray = [];

        foreach ($args as $arg) {

            if ($this->isValidArgument($arg)) {

                list($key, $value) = $this->extractArgument($arg);

                $filteredArray[$key] = $this->decodeValue($value);

            }

        }

        return $filteredArray;
    }

    /**
     * Extract the key/value pair from argument
     * @param $arg
     * @return array
     */
    protected function extractArgument($arg)
    {
        return explode('=', $arg);
    }

    /**
     * Determine if argument can be read
     * @param $arg
     * @return bool
     */
    protected function isValidArgument($arg)
    {
        return stristr($arg, '=') !== false;
    }

    /**
     * Allow url encoding in cli requests
     * @param $param
     * @return string
     */
    protected function decodeValue($param)
    {
        return urldecode($param);
    }

}

<?php
namespace Deployable\Contracts;

interface Input
{

    /**
     * Get an input value
     * @param $key
     * @return mixed
     */
    public function getValue($key);

    /**
     * Set a new value
     * @param $key
     * @param $value
     */
    public function setValue($key, $value);

}

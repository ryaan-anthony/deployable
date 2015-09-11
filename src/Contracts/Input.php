<?php
namespace Deployable\Contracts;

interface Input
{
    /**
     * Initialize the raw input
     *
     * @param array
     */
    public function __construct(array $input = []);

    /**
     * Get an input value
     *
     * @param $key
     * @param string
     * @return mixed
     */
    public function getValue($key, $default = '');

    /**
     * Set a new value
     *
     * @param $key
     * @param $value
     */
    public function setValue($key, $value);

}

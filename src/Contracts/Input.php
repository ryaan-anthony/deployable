<?php
namespace Deployable\Contracts;

interface Input
{
    /**
     * Initialize the raw input
     *
     * @param array
     */
    public function __construct(array $request = []);

    /**
     * Get an input param
     *
     * @param $key
     * @param string
     * @return mixed
     */
    public function getParams($key = null, $default = null);

    /**
     * Set a new param
     *
     * @param $key
     * @param $param
     */
    public function setParams($key = null, $param = null);

}

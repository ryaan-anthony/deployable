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
    public function getParam($key, $default = null);

    /**
     * Set a new param
     *
     * @param $key
     * @param null $param
     */
    public function setParam($key, $param = null);

    /**
     * Get all params
     *
     * @return array
     */
    public function getParams();

    /**
     * Set all params
     *
     * @param array $params
     */
    public function setParams(array $params = []);

}

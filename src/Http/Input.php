<?php
namespace Deployable\Http;

use Deployable\Contracts\Input as InputInterface;
abstract class Input implements InputInterface
{
    /**
     * @var array
     */
    protected $params;

    /**
     * Initialize the raw input
     *
     * @param array
     */
    abstract public function __construct(array $request = []);

    /**
     * Get an input param
     *
     * @param $key
     * @param string
     * @return mixed
     */
    public function getParam($key, $default = null)
    {
        return isset($this->params[$key]) ? $this->params[$key] : $default;
    }

    /**
     * Set a new param
     *
     * @param $key
     * @param null $param
     */
    public function setParam($key, $param = null)
    {
        $this->params[$key] = $param;
    }

    /**
     * Get all params
     *
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set all params
     *
     * @param array $params
     */
    public function setParams(array $params = [])
    {
        $this->params = $params;
    }

}

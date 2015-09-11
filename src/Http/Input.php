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
    public function getParams($key = null, $default = null)
    {
        if (is_null($key)) {

            return $this->params;

        } elseif (isset($this->params[$key])) {

            return $this->params[$key];
        }

        return $default;
    }

    /**
     * Set a new param
     *
     * @param $key
     * @param $param
     */
    public function setParams($key = null, $param = null)
    {
        if (is_null($key)) {

            $this->params = $param;

        } else {

            $this->params[$key] = $param;

        }
    }

}

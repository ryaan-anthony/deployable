<?php
namespace Deployable\Http;

use Deployable\Contracts\Input as InputInterface;
class Input implements InputInterface
{
    /**
     * @var array
     */
    protected $input;

    /**
     * Initialize the raw input
     *
     * @param array
     */
    public function __construct(array $input = [])
    {
        $this->input = $input;
    }

    /**
     * Get an input value
     *
     * @param $key
     * @param string
     * @return mixed
     */
    public function getValue($key, $default = '')
    {
        return isset($this->input[$key]) ? $this->input[$key] : $default;
    }

    /**
     * Set a new value
     *
     * @param $key
     * @param $value
     */
    public function setValue($key, $value)
    {
        $this->input[$key] = $value;
    }

}

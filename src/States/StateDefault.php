<?php
namespace Deployable\States;

use Deployable\Contracts\Input;
use Deployable\Contracts\State;

abstract class StateDefault implements State
{
    /**
     * @var Input
     */
    protected $input;

    public function __construct(Input $input)
    {
        $this->input = $input;
    }

    /**
     * @return Input
     */
    protected function getInput()
    {
        return $this->input;
    }

}

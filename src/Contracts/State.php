<?php
namespace Deployable\Contracts;

interface State
{

    /**
     * Enter the state
     */
    public function begin();

    /**
     * Process input
     * @param Input $input
     * @return
     */
    public function touch(Input $input);

    /**
     * Handle exceptions
     *
     * @param Halt
     * @return
     */
    public function changed(Halt $exception);

    /**
     * Exit the state
     */
    public function end();

}

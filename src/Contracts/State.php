<?php
namespace Deployable\Contracts;

// todo implement
interface State
{

    /**
     * Enter the state
     */
    public function begin();

    /**
     * Process a request
     * @return
     */
    public function touch();

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

<?php
namespace Deployable;

use Deployable\Contracts\Input;
use Deployable\Contracts\Output;

class App
{

    /**
     * Run the application
     * @param Input $input
     * @param Output $output
     */
    public function run(Input $input, Output $output)
    {
        $output->addMessage('Welcome to Deployable!');

        $output->addMessage('**********************');

        foreach ($input->getParams() as $key => $value) {

            $output->addMessage($key . ' | ' . $value);

        }

        // todo - do stuff with user input
    }

}

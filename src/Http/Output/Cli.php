<?php
namespace Deployable\Http\Output;

use Deployable\Http\Output;

class Cli extends Output
{

    /**
     * Display the output
     *
     * @return string
     */
    public function __toString()
    {
        $messages = $this->getMessages();

        return implode(PHP_EOL, $messages) . PHP_EOL;
    }

}

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
        return $this->getMessages();
    }

}

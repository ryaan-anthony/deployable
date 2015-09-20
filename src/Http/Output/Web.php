<?php
namespace Deployable\Http\Output;

use Deployable\Http\Output;
use Deployable\Traits\View;

class Web extends Output
{
    use View;

    /**
     * Display the output
     * @return string
     */
    public function __toString()
    {
        return $this->renderView();
    }
}

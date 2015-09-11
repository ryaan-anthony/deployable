<?php
namespace Deployable\Http\Input;

use Deployable\Http\Input;

class Web extends Input
{
    public function __construct(array $request = [])
    {
        if (!$request) {

            $request = $_REQUEST;

        }

        $this->setParams($request);
    }
}

<?php
namespace Deployable\Http\Input;

use Deployable\Http\Input;

class Console extends Input
{
    public function __construct(array $request = [])
    {
        if (!$request) {

            $request = $_SERVER['argv'];

        }

        $this->request = $request;
    }
}

<?php
namespace Deployable;

use Deployable\Contracts\Input;
use Deployable\Contracts\Output;
use Zend\Config\Reader\Xml;

if (!function_exists('dd')) {function dd() {echo '<pre>';var_dump(func_get_args());die;}}

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

        $xmlReader = new Xml();

        $config = $xmlReader->fromFile('../config/builds.xml');

        $builds = $this->buildList($config['build']);

        foreach ($builds as $build) {

            $output->addMessage('<a href="'.$build['url'].'">'.$build['name'].'</a>');

        }
    }

    protected function buildList(array $list = [])
    {
        return isset($list[0]) ? $list : [$list];
    }


}

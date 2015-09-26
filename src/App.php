<?php
namespace Deployable;

use Deployable\Contracts\Input;
use Deployable\Contracts\Output;
use Zend\Config\Reader\ReaderInterface;

if (!function_exists('dd')) {function dd() {echo '<pre>';var_dump(func_get_args());die;}}

class App
{
    /**
     * @var ReaderInterface
     */
    protected $config;

    /**
     * Instantiate the application
     * @param ReaderInterface $config
     */
    public function __construct(ReaderInterface $config)
    {
        $this->config = $config;
    }

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

        $builds = $this->getBuilds();

        foreach ($builds as $build) {

            $output->addMessage($build['name']);

        }
    }

    /**
     * Get build config file
     * @return string
     */
    protected function getBuildFile()
    {
        return dirname(__DIR__).'/config/builds.xml';
    }

    /**
     * Get an array of build config
     * @return array
     */
    protected function getBuilds()
    {
        $buildFile = $this->getBuildFile();

        $config = $this->config->fromFile($buildFile);

        return isset($config['build']) ? $config['build'] : [];
    }

}

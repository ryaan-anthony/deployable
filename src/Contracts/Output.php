<?php
namespace Deployable\Contracts;

interface Output
{
    /**
     * Add a message
     * @param $message
     */
    public function addMessage($message);

    /**
     * Provide messages
     * @param string $format of message
     * @return string
     */
    public function getMessages($format = '%s');

    /**
     * Display the output
     *
     * @return string
     */
    public function __toString();

}

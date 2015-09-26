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
     * @return array
     */
    public function getMessages();

    /**
     * Display the output
     *
     * @return string
     */
    public function __toString();

}

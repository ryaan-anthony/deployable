<?php
namespace Deployable\Traits;

trait Messages
{
    /**
     * Messages created during this request
     * @var array
     */
    protected $messages = [];

    /**
     * Add a message
     * @param $message
     */
    public function addMessage($message)
    {
        $this->messages[] = $message;
    }

    /**
     * Provide messages
     * @return array
     */
    public function getMessages()
    {
        return $this->messages;
    }

}

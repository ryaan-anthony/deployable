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
     * @param string $format of message
     * @return string
     */
    public function getMessages($format = '%s')
    {
        $messages = '';

        foreach ($this->messages as $message) {

            $messages .= sprintf($format, $message) . PHP_EOL;

        }

        return $messages;
    }

}

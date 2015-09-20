<?php
namespace Deployable;

class Agent
{

    /**
     * Scan for jobs
     */
    public function scan()
    {
        usleep(1000);

        // todo - scan for changes

        return true;
    }

}

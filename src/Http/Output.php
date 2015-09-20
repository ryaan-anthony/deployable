<?php
namespace Deployable\Http;

use Deployable\Contracts\Output as OutputInterface;
use Deployable\Traits\Messages;

abstract class Output implements OutputInterface
{
    use Messages;
}

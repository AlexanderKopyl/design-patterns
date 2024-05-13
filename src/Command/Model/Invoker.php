<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Command\Model;

use Oleksandrkopyl\DesignPatterns\Command\Api\Command;

class Invoker
{
    /**
     * @var Command
     */
    private Command $command;

    /**
     * @param Command $cmd
     * @return $this
     */
    public function setCommand(Command $cmd) {
        $this->command = $cmd;
        return $this;
    }

    /**
     * @return void
     */
    public function run() {
        $this->command->execute();
    }
}
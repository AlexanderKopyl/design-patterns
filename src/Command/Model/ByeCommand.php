<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Command\Model;

use Oleksandrkopyl\DesignPatterns\Command\Api\Command;

class ByeCommand implements Command
{
    /**
     * @var string
     */
    private string $receiver;

    /**
     * @param string $receiver
     */
    public function __construct(string $receiver) {
        $this->receiver = $receiver;
    }

    /**
     * @return void
     */
    public function execute() {
        echo $this->receiver . ", Bye!\n";
    }
}
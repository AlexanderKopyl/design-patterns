<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Observer\Model;

use Oleksandrkopyl\DesignPatterns\Observer\Api\Observer;
use Oleksandrkopyl\DesignPatterns\Observer\Api\Subject;

class Subscriber implements Observer
{
    /**
     * @param string $name
     */
    public function __construct(
        private readonly string $name
    ) {
    }

    /**
     * @inheritDoc
     */
    public function update(Subject $subject): void
    {
        echo $this->name . " has been notified about: " . $subject->getName() . PHP_EOL;
    }
}
<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Observer\Model;

use Oleksandrkopyl\DesignPatterns\Observer\Api\Observer;
use Oleksandrkopyl\DesignPatterns\Observer\Api\Subject;

class Blog implements Subject
{
    private string $name;

    /**
     * @param array $observers
     */
    public function __construct(
        public array  $observers = []
    ) {
    }

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $index = array_search($observer, $this->observers);
        if ($index !== FALSE) {
            unset($this->observers[$index]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
        $this->notify();
    }
}
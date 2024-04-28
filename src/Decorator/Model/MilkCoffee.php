<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Decorator\Model;

use Oleksandrkopyl\DesignPatterns\Decorator\Api\Coffee;

class MilkCoffee implements Coffee
{
    /**
     * @param Coffee $coffee
     */
    public function __construct(
        private readonly Coffee $coffee
    ) {

    }

    /**
     * @return int
     */
    public function getCost(): int
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', milk';
    }
}
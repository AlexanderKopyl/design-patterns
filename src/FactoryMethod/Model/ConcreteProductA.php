<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\FactoryMethod\Model;

use Oleksandrkopyl\DesignPatterns\FactoryMethod\Api\ProductInterface;

class ConcreteProductA implements ProductInterface
{
    /**
     * @inheritDoc
     */
    public function calculatePrice(): int
    {
        return 100;
    }
}
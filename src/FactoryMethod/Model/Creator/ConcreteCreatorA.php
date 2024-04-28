<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\FactoryMethod\Model\Creator;

use Oleksandrkopyl\DesignPatterns\FactoryMethod\Api\ProductInterface;
use Oleksandrkopyl\DesignPatterns\FactoryMethod\Model\AbstractCreator;
use Oleksandrkopyl\DesignPatterns\FactoryMethod\Model\ConcreteProductA;

class ConcreteCreatorA extends AbstractCreator
{
    /**
     * @inheritDoc
     */
    public function factoryMethod(): ProductInterface
    {
        return new ConcreteProductA();
    }
}
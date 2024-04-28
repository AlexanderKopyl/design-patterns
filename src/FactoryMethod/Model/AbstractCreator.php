<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\FactoryMethod\Model;

use Oleksandrkopyl\DesignPatterns\FactoryMethod\Api\ProductInterface;

abstract class AbstractCreator
{
    /**
     * Create instance
     *
     * @return ProductInterface
     */
    abstract public function factoryMethod(): ProductInterface;

    /**
     * @return int
     */
    public function calculate(): int {
        $product = $this->factoryMethod();
        return $product->calculatePrice();
    }
}
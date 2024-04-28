<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\FactoryMethod\Api;

interface ProductInterface
{
    /**
     * Calculate product
     *
     * @return int
     */
    public function calculatePrice(): int;
}
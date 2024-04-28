<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Decorator\Model;

use Oleksandrkopyl\DesignPatterns\Decorator\Api\Coffee;

class SimpleCoffee implements Coffee
{
    public function getCost(): int
    {
        return 10;
    }

    public function getDescription(): string
    {
        return 'Simple coffee';
    }
}
<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Prototype\Model;

use Oleksandrkopyl\DesignPatterns\Prototype\Model\BookPrototype;

class MathBookPrototype extends BookPrototype
{
    protected string $category = 'Math';

    /**
     * @return void
     */
    public function __clone()
    {
    }
}
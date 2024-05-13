<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Prototype\Model;

use Oleksandrkopyl\DesignPatterns\Prototype\Model\BookPrototype;

class ScienceBookPrototype extends BookPrototype
{
    protected string $category = 'Science';

    /**
     * @return void
     */
    public function __clone()
    {
    }
}
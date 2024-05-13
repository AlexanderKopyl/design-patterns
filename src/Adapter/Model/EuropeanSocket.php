<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Adapter\Model;

use Oleksandrkopyl\DesignPatterns\Adapter\Api\Plug;

class EuropeanSocket implements Plug
{
    /**
     * @inheritDoc
     */
    public function voltage(): int
    {
        return 230;
    }
}
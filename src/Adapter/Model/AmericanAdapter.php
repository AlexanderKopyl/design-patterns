<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Adapter\Model;

use Oleksandrkopyl\DesignPatterns\Adapter\Api\Plug;

class AmericanAdapter implements Plug
{
    /**
     * @var Plug
     */
    private Plug $plug;

    /**
     * @param Plug $plug
     */
    public function __construct(Plug $plug) {
        $this->plug = $plug;
    }

    /**
     * @return int
     */
    public function voltage(): int
    {
        return $this->plug->voltage() / 2; // Convert 230V to 115V
    }
}
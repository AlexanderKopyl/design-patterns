<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Adapter\Api;

interface Plug
{
    /**
     * @return int
     */
    public function voltage(): int;
}
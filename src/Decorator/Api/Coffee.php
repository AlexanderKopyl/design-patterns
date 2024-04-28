<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Decorator\Api;

interface Coffee
{
    public function getCost();
    public function getDescription();
}
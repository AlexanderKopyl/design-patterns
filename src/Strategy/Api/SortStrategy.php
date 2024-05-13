<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Strategy\Api;

interface SortStrategy
{
    /**
     * @param array $dataset
     * @return array
     */
    public function sort(array $dataset): array;
}
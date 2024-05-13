<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Strategy\Model;

use Oleksandrkopyl\DesignPatterns\Strategy\Api\SortStrategy;

class Context
{
    /**
     * @var SortStrategy
     */
    private SortStrategy $sortStrategy;

    /**
     * @param SortStrategy $sortStrategy
     */
    public function __construct(SortStrategy $sortStrategy) {
        $this->sortStrategy = $sortStrategy;
    }

    /**
     * @param array $dataset
     * @return array
     */
    public function executeStrategy(array $dataset): array {
        return $this->sortStrategy->sort($dataset);
    }
}
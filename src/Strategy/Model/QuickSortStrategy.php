<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Strategy\Model;

use Oleksandrkopyl\DesignPatterns\Strategy\Api\SortStrategy;

class QuickSortStrategy implements SortStrategy
{

    /**
     * @inheritDoc
     */
    public function sort(array $dataset): array
    {
        echo "Sorting using quick sort\n";
        // Perform sorting
        sort($dataset);
        return $dataset;
    }
}
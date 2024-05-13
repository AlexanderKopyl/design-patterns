<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Strategy\Model;

use Oleksandrkopyl\DesignPatterns\Strategy\Api\SortStrategy;

class BubbleSortStrategy implements SortStrategy
{

    /**
     * @inheritDoc
     */
    public function sort(array $dataset): array
    {
        echo "Sorting using bubble sort\n";
        // Perform sorting
        sort($dataset);
        return $dataset;
    }
}
<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Observer\Api;

interface Observer
{
    /**
     * @param Subject $subject
     * @return void
     */
    public function update(Subject $subject): void;
}
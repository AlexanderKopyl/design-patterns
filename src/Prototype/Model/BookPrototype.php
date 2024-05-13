<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Prototype\Model;

abstract class BookPrototype
{
    protected string $title;
    protected string $category;

    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title) {
        $this->title = $title;
        return $this;
    }
}
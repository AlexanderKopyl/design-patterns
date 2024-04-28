<?php

declare(strict_types=1);

namespace Oleksandrkopyl\DesignPatterns\Observer\Api;

interface Subject
{
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();

    public function getName();
    public function setName($name);
}
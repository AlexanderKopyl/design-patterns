<?php

require 'vendor/autoload.php';

use Oleksandrkopyl\DesignPatterns\FactoryMethod\Model\Creator\ConcreteCreatorA;
use Oleksandrkopyl\DesignPatterns\FactoryMethod\Model\Creator\ConcreteCreatorB;


$factoryCreatorA = new ConcreteCreatorA();
$factoryCreatorB = new ConcreteCreatorB();


echo "Creator: The same creator's code has just worked with " . $factoryCreatorA->calculate() . PHP_EOL;
echo "Creator: The same creator's code has just worked with " . $factoryCreatorB->calculate() . PHP_EOL;
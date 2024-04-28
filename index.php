<?php

require 'vendor/autoload.php';

use Oleksandrkopyl\DesignPatterns\FactoryMethod\Model\Creator\ConcreteCreatorA;
use Oleksandrkopyl\DesignPatterns\FactoryMethod\Model\Creator\ConcreteCreatorB;
use Oleksandrkopyl\DesignPatterns\Observer\Model\Blog;
use Oleksandrkopyl\DesignPatterns\Observer\Model\Subscriber;

//
//$factoryCreatorA = new ConcreteCreatorA();
//$factoryCreatorB = new ConcreteCreatorB();
//
//
//echo "Creator: The same creator's code has just worked with " . $factoryCreatorA->calculate() . PHP_EOL;
//echo "Creator: The same creator's code has just worked with " . $factoryCreatorB->calculate() . PHP_EOL;

// Usage:
$blog = new Blog();
$alice = new Subscriber("Alice");
$bob = new Subscriber("Bob");

$blog->attach($alice);
$blog->attach($bob);

$blog->setName('New blog post');
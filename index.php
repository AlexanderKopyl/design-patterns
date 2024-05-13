<?php

require 'vendor/autoload.php';

use Oleksandrkopyl\DesignPatterns\Command\Model\ByeCommand;
use Oleksandrkopyl\DesignPatterns\Command\Model\HelloCommand;
use Oleksandrkopyl\DesignPatterns\Command\Model\Invoker;
use Oleksandrkopyl\DesignPatterns\Decorator\Model\MilkCoffee;
use Oleksandrkopyl\DesignPatterns\Decorator\Model\SimpleCoffee;
use Oleksandrkopyl\DesignPatterns\Decorator\Model\WhipCoffee;
use Oleksandrkopyl\DesignPatterns\FactoryMethod\Model\Creator\ConcreteCreatorA;
use Oleksandrkopyl\DesignPatterns\FactoryMethod\Model\Creator\ConcreteCreatorB;
use Oleksandrkopyl\DesignPatterns\Observer\Model\Blog;
use Oleksandrkopyl\DesignPatterns\Observer\Model\Subscriber;
use Oleksandrkopyl\DesignPatterns\Strategy\Model\BubbleSortStrategy;
use Oleksandrkopyl\DesignPatterns\Strategy\Model\Context;
use Oleksandrkopyl\DesignPatterns\Strategy\Model\QuickSortStrategy;

// ------------ FactoryMethod --------------

//$factoryCreatorA = new ConcreteCreatorA();
//$factoryCreatorB = new ConcreteCreatorB();

//echo "Creator: The same creator's code has just worked with " . $factoryCreatorA->calculate() . PHP_EOL;
//echo "Creator: The same creator's code has just worked with " . $factoryCreatorB->calculate() . PHP_EOL;

// ----------- FactoryMethod -----------

// Usage: -------------- Observer -----------
//$blog = new Blog();
//$alice = new Subscriber("Alice");
//$bob = new Subscriber("Bob");

//$blog->attach($alice);
//$blog->attach($bob);

//$blog->setName('New blog post');

// Usage: -------------- Observer -----------

//// Usage: ------- Decorator -----------
//$coffee = new SimpleCoffee();
//echo $coffee->getCost() . PHP_EOL; // Output: 10
//echo $coffee->getDescription() . PHP_EOL; // Output: Simple coffee
//
//$coffee = new MilkCoffee($coffee);
//echo $coffee->getCost() . PHP_EOL; // Output: 12
//echo $coffee->getDescription() . PHP_EOL; // Output: Simple coffee, milk
//
//$coffee = new WhipCoffee($coffee);
//echo $coffee->getCost() . PHP_EOL; // Output: 17
//echo $coffee->getDescription() . PHP_EOL; // Output: Simple coffee, milk, whip

//// Usage: ------- Decorator -----------

// Usage: ---------- Strategy ----------
//$dataset = array(1, 5, 4, 3, 2, 8);

//$context = new Context(new BubbleSortStrategy());
//$result = $context->executeStrategy($dataset);

//$context = new Context(new QuickSortStrategy());
//$result = $context->executeStrategy($dataset);

// Usage: ---------- Strategy ----------

// Usage: ---------- Command ----------
$invoker = new Invoker();

$command = new HelloCommand('John');
$invoker->setCommand($command);
$invoker->run(); // Output: John, Hello!

$command = new ByeCommand('John');
$invoker->setCommand($command);
$invoker->run(); // Output: John, Bye!
// Usage: ---------- Command ----------
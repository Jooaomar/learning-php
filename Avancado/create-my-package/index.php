<?php
// Load Composer's autoloader (if using Composer)
require_once __DIR__ . '/vendor/autoload.php';

use CreateMyPackage\ClassA;
use CreateMyPackage\ClassB;
use CreateMyPackage\ClassC;

// Instantiate your classes
$classA = new ClassA();
$classB = new ClassB();
$classC = new ClassC();

// Example usage
echo $classA->doSomething() . "\n";
echo $classB->doSomethingElse() . "\n";
echo $classC->doAnotherThing() . "\n";
?>

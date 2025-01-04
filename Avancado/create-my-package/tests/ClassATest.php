<?php
require_once __DIR__ . '/../vendor/autoload.php';

use CreateMyPackage\ClassA;
use PHPUnit\Framework\TestCase;

class ClassATest extends TestCase {
    public function testDoSomething() {
        $classA = new ClassA();
        $result = $classA->doSomething();
        $this->assertEquals("Doing something in Class A", $result);
    }
}
?>

To organize your PHP package with 3 classes across different files without relying on third-party libraries, you can follow a straightforward structure. Here’s a step-by-step guide:

### Step-by-Step Guide to Organize Your PHP Package

#### Step 1: Project Structure

Create a directory for your package and organize it like this:

```
my-php-package/
├── src/
│   ├── ClassA.php
│   ├── ClassB.php
│   └── ClassC.php
└── tests/
    ├── ClassATest.php
    ├── ClassBTest.php
    └── ClassCTest.php
```

#### Step 2: Define Your Classes

Inside the `src/` directory, create your PHP class files. Each class should be in its own file, named after the class itself.

##### Example: ClassA.php

```php
<?php
namespace MyPackage;

class ClassA {
    public function doSomething() {
        return "Doing something in Class A";
    }
}
?>
```

##### Example: ClassB.php

```php
<?php
namespace MyPackage;

class ClassB {
    public function doSomethingElse() {
        return "Doing something else in Class B";
    }
}
?>
```

##### Example: ClassC.php

```php
<?php
namespace MyPackage;

class ClassC {
    public function doAnotherThing() {
        return "Doing another thing in Class C";
    }
}
?>
```

#### Step 3: PSR-4 Autoloading

You can use Composer's PSR-4 autoloading mechanism to autoload classes from the `src/` directory. Initialize Composer in your package directory:

```bash
composer init
```

Follow the prompts to create a `composer.json` file. You can skip adding dependencies. Then, define PSR-4 autoload in `composer.json`:

```json
{
    "name": "your-vendor-name/my-php-package",
    "autoload": {
        "psr-4": {
            "MyPackage\\": "src/"
        }
    }
}
```

Run `composer dump-autoload` to generate the autoloader:

```bash
composer dump-autoload
```

#### Step 4: Testing

Create test files for each class in the `tests/` directory to verify their functionality.

##### Example: ClassATest.php

```php
<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MyPackage\ClassA;
use PHPUnit\Framework\TestCase;

class ClassATest extends TestCase {
    public function testDoSomething() {
        $classA = new ClassA();
        $result = $classA->doSomething();
        $this->assertEquals("Doing something in Class A", $result);
    }
}
?>
```

#### Step 5: Usage Example

Create an example script (`index.php`) to demonstrate how to use your package:

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use MyPackage\ClassA;
use MyPackage\ClassB;
use MyPackage\ClassC;

$classA = new ClassA();
$classB = new ClassB();
$classC = new ClassC();

echo $classA->doSomething() . "\n";
echo $classB->doSomethingElse() . "\n";
echo $classC->doAnotherThing() . "\n";
?>
```

### Summary

Organizing your PHP package with multiple classes involves creating separate files for each class, using namespaces to avoid naming conflicts, and optionally using Composer for autoloading. By following this structure, your package becomes modular, testable, and easier to maintain, allowing others to integrate and use it in their PHP projects seamlessly.



## Testes

```bash
vendor/bin/phpunit tests/
```
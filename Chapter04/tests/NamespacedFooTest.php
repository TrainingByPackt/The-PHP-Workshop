<?php

namespace Chapter04\Test;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../namespaced-foo.php';

class NamespacedFooTest extends TestCase
{
    public function testFoo()
    {
        $this->assertEquals('I was called', \Chapter04\foo());
    }
}

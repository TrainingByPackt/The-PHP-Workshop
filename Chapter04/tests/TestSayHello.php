<?php

namespace Chapter04\Test;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../function-with-default-value.php';

class TestSayHello extends TestCase
{
    public function testSayHelloDefaultValue()
    {
        $expected = 'Hello John';
        $actual = sayHello();
        $this->assertEquals($expected, $actual);
    }

    public function testSayHello()
    {
        $expected = 'Hello Bart';
        $actual = sayHello('Bart');
        $this->assertEquals($expected, $actual);
    }
}

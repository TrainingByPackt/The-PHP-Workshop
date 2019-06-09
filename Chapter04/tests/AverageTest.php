<?php

namespace Chapter04\Test;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../function-average.php';

class AverageTest extends TestCase
{
    public function testAverageWithoutInputWillThrowException()
    {
        $this->expectException(\DomainException::class);

        average();
    }

    public function testAverageWithOtherThanNumericWillThrowException()
    {
        $this->expectException(\DomainException::class);

        average(1, 'foo');
    }

    public function testAverage()
    {
        $this->assertSame(6.0, average(6,6,6,6));
        $this->assertSame(5.0, average(4,4,6,6));
        $this->assertSame(6.2, average(6,6.1,6.3,6.4));
    }
}

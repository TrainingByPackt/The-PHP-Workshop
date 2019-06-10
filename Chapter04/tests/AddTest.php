<?php

namespace Chapter04\Test;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../exercises/add.php';

class AddTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testAdd($arg1, $arg2, $expected)
    {
        if (false === function_exists('add')) {
            $this->markTestIncomplete('You will have to name your function "add" for this test to run.');
        }

        $actual = add($arg1, $arg2);

        $this->assertEquals($expected, $actual);
    }

    /**
     * This is a dataProvider. It provides sets of values, that will be used as input for testAdd,
     * because testAdd uses a dataProvider annotation pointing to this method.
     *
     * @return array
     */
    public function provider(): array
    {
        return [
            [1, 1, "The sum of 1 and 1 is: 2"],
            [1, 2, "The sum of 1 and 2 is: 3"],
            [111.2, 2, "The sum of 111.2 and 2 is: 113.2"],
        ];
    }
}

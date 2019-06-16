<?php

namespace Chapter04\Test;

use PHPUnit\Framework\TestCase;

// include the file that contains the functions for the activity
include_once __DIR__ . '/../activity.php';

class ActivityTest extends TestCase
{
    /**
     * @dataProvider  factorialData
     *
     * @param $number
     * @param $expectedFactorial
     * @return string
     */
    public function testFactorial(int $number, int $expectedFactorial)
    {
        $this->checkFunction('factorial');

        $actual = factorial($number);
        $this->assertEquals($expectedFactorial, $actual);
    }

    /**
     * @dataProvider  factorialData
     *
     * @param $number
     * @param $expectedFactorial
     * @return string
     */
    public function testPerformOperationFactorial(int $number, int $expectedFactorial)
    {
        $this->checkFunction('performOperation');
        $this->checkFunction('factorial');

        $actual = performOperation('factorial', $number);
        $this->assertEquals($expectedFactorial, $actual);
    }

    /**
     * @dataProvider sumProvider
     * @param array $arguments
     * @param $expected
     */
    public function testSum(array $arguments, $expected)
    {
        $this->checkFunction('sum');

        $actual = call_user_func_array('sum', $arguments);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider sumProvider
     * @param array $arguments
     * @param $expected
     */
    public function testPerformOperationSum(array $arguments, $expected)
    {
        $this->checkFunction('performOperation');
        $this->checkFunction('sum');

        // place 'sum' at the beginning of the $arguments array
        array_unshift($arguments, 'sum');

        $actual = call_user_func_array('performOperation', $arguments);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider primeProvider
     *
     * @param int $number
     * @param bool $expected
     */
    public function testPrime(int $number, bool $expected)
    {
        $this->checkFunction('prime');

        // informational message, that will indicate what was wrong with the outcome
        $message = $number . ($expected ? ' is a prime' : ' is NOT a prime');

        $this->assertSame($expected, prime($number), $message);
    }

    /**
     * @dataProvider primeProvider()
     */
    public function testPerformOperationPrime(int $number, bool $expected)
    {
        $this->checkFunction('performOperation');
        $this->checkFunction('prime');

        // informational message, that will indicate what was wrong with the outcome
        $message = $number . ($expected ? ' is a prime' : ' is NOT a prime');

        $actual = performOperation('prime', $number);

        $this->assertSame($expected, $actual, $message);
    }

    public function factorialData(): array
    {
        return [
            [1, 1],
            [2, 2],
            [3, 6],
            [4, 24],
            [5, 120],
            [6, 720],
        ];
    }

    public function sumProvider(): array
    {
        return [
            [[1, 1,], 2],
            [[1, 2, 3, 4, 5,], 15],
            [[23, 90,], 113],
            [[0, 0, 0, 0, 0, 0, 0, 0, 0, 98715648716.34], 98715648716.34,],
        ];
    }

    public function primeProvider(): array
    {
        return [
            [1, false],
            [2, false],
            [3, true],
            [5, true],
            [6, false],
            [7, true],
            [9, false],
            [11, true],
            [13, true],
            [29, true],
            [109, true],
            [313, true],
        ];
    }

    /**
     * This is just a utility function that marks a test as incomplete when a function it would
     * like to test is absent.
     *
     * @param string $functionName
     */
    private function checkFunction(string $functionName): void
    {
        if (false === function_exists($functionName)) {
            $this->markTestIncomplete("No function $functionName found... did you write your functions in Chapter04/activity.php?");
        }
    }

}

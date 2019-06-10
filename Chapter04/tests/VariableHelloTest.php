<?php
declare(strict_types=1);

namespace Chapter04\Test;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../exercises/variable-hello.php';

class VariableHelloTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testGreeting(string $name, string $expected)
    {
        if (!function_exists('greeting')){
            $this->markTestIncomplete('You should name you function "greeting" so that this unit test can test it.');
        }

        $actual = greeting($name);

        $this->assertEquals($expected, $actual);
    }

    public function provider(): array
    {
        return [
            ['John', 'Hello John'],
            ['Bart', 'Hello Bart'],
        ];
    }
}

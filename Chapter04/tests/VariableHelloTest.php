<?php
declare(strict_types=1);

namespace Chapter04\Test;

use PHPUnit\Framework\TestCase;

class VariableHelloTest extends TestCase
{

    /**
     * @dataProvider provider
     */
    public function testGreeting(string $name, string $expected)
    {
        require __DIR__ . '/../exercises/variable-hello.php';

        if (false === is_callable($greeting)) {
            $this->markTestIncomplete('You should store your function in a variable named $greeting so that this unit test can test it.');
        }

        // start output buffering
        ob_start();

        // generate the output
        $greeting($name);

        // get output buffer and delete it
        $actual = ob_get_clean();

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

<?php

namespace Chapter04\Test;

use PHPUnit\Framework\TestCase;

/*
 * Require the file with the function under test
 */
require_once __DIR__ . '/../determine-output-dir.php';

class TestDetermineOutputDirectory extends TestCase
{
    public function testUsesDefaultSystemTempDir()
    {
        $actual = determineOutputDirectory();

        $expected = '/tmp' . DIRECTORY_SEPARATOR . 'output';
        $this->assertSame($expected, $actual);
    }

    public function testUsesDirectoryArgumentWhenProvided(){
        $actual = determineOutputDirectory('/var/tmp/myapp');

        $expected = '/var/tmp/myapp' . DIRECTORY_SEPARATOR . 'output';
        $this->assertSame($expected, $actual);
    }
}

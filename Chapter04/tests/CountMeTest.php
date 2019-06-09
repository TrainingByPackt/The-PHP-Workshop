<?php

namespace Chapter04\Test;

use PHPUnit\Framework\TestCase;

include_once __DIR__ . '/../count-me.php';

class CountMeTest extends TestCase
{
    public function testGlobalCounter()
    {
        // expose $count to global scope
        global $count;

        // intialise at 0
        $count = 0;

        // calss to countMe will have the side effect of incrementing $count by 1
        countMe();
        countMe();
        countMe();
        countMe();

        $this->assertEquals(4, $count);

        countMe();
        $this->assertEquals(5, $count);
    }
}

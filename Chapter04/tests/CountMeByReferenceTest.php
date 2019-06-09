<?php

namespace Chapter04\Test;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../count-me-by-reference.php';

class CountMeByReferenceTest extends TestCase
{
    public function testCountMeByReference()
    {
        $someCount = 0;

        countMeByReference($someCount);
        countMeByReference($someCount);
        countMeByReference($someCount);
        countMeByReference($someCount);
        countMeByReference($someCount);

        $this->assertEquals(5, $someCount);
    }
}

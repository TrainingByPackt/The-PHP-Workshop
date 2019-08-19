<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class PathTest extends Testcase
{
    public function testGeneratedUrl(): void
    {
        $this->assertSame('./super-get-href.php?hero=a-bomb', path(['hero' => 'a-bomb']));
        $this->assertSame('./super-get-href.php?in=two+words', path(['in' => 'two words']));
        $this->assertSame('./super-get-href.php?with=extra+slash%2F', path(['with' => 'extra slash/']));
        $this->assertSame('./super-get-href.php?nested%5B0%5D=array+data', path(['nested' => ['array data']]));
        $this->assertSame('./super-get-href.php?hero=a-bomb&score=4.7', path(['hero' => 'a-bomb', 'score' => '4.7']));
    }
}
<?php
declare(strict_types=1);

function countMeByReference(int &$count): void
{
    $count++;
}

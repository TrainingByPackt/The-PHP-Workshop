<?php
declare(strict_types=1);

$a = 15;

$callable = function() use ($a) {
    return $a;
};

$a = 'different';

echo $callable(); // outputs 15

// newline for readability
echo PHP_EOL;




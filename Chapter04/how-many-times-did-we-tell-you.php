<?php
declare(strict_types=1);

function howManyTimesDidWeTellYou(int $numberOfTimes): string
{
    if (0 > $numberOfTimes) {
        throw new DomainException('You cannot tell me a number of times less than 0.');
    }

    if (0 === $numberOfTimes) {
        return 'You did not tell me at all!';
    }

    if (1 === $numberOfTimes) {
        return 'You told me one time only.';
    }

    return "You told me $numberOfTimes times, thank you.";
}

// now we call howManyTimesDidWeTellYou($numberOfTimes) with different values for $numberOfTimes
// we print the result using echo
// we print a newline after printing the result for better readability of the output

echo howManyTimesDidWeTellYou(0);

echo PHP_EOL;

echo howManyTimesDidWeTellYou(1);

echo PHP_EOL;

echo howManyTimesDidWeTellYou(24);

echo PHP_EOL;

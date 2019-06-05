<?php
$fruits = [
    'Pear',
    'orange', // notice orange is all lowercase
    'Apple',
    'Banana',
];

// original $fruits array
print_r($fruits);

// print the return value of sort, which is just 1 NOT THE ARRAY!!!
print_r(sort($fruits));

// newline for readability
echo PHP_EOL;

// the original array is now sorted, print it again and you will see alphabetical order, orange comes last, because it is lowercase
print_r($fruits);

// sort in reverse order with rsort
rsort($fruits);

// the original is now sorted in reverse order
print_r($fruits);

// sort in natural alphabetical order, orange now comes before Pear, as you would expect.
natcasesort($fruits);

print_r($fruits);

<?php
$fruits = [
    'Pear',
    'Orange',
    'Apple',
    'Banana',
];

// original $fruits array
print_r($fruits);

$reversedFruits = array_reverse($fruits);

// the original is still the same
print_r($fruits);

// array_reverse worked on a copy of the original array and returned it with its values in reverse order
print_r($reversedFruits);

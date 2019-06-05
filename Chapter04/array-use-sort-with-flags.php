<?php
$fruits = [
    'Pear',
    'orange', // notice orange is all lowercase
    'Apple',
    'Banana',
];

print_r($fruits);

// no flags passed
sort($fruits);

// sorted, but case sensitive: orange comes last
print_r($fruits);

// use natural flag combined with case flag to achieve case insensitive sorting, orange comes before Pear
// combined with bitwise OR operator ^
sort($fruits, SORT_FLAG_CASE | SORT_NATURAL);

print_r($fruits);

// same result with natcasesort()
natcasesort($fruits);

print_r($fruits);

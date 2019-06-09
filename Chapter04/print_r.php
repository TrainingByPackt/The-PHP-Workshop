<?php
$values = [
    'foo',
    'bar',
];

// To display $values on screen, you cannot use echo, because it will print 'Array'
echo $values;

// echo a newline for readability
echo PHP_EOL;

// use print_r instead, to display a human readable representation of $values
print_r($values);

// if you do not want to print the result of print_r, use the second optional argument and pass true, so that the output of print_r will be returned an not printed
$output = print_r($values, true);

// now you can use $output to store in a database or log file for example, or print it using echo if you like:
echo $output;

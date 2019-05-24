<?php
/*
 * Built-in  functions
 */
echo strtoupper('Foo');
// output: FOO
echo PHP_EOL;

function foo()
{
} // does nothing

echo foo(); // no output
echo PHP_EOL;

function bar(): string
{
    return 'bar';
}

// returns a string 'bar'
// returntype :string is optional and available as from php 7 (todo: lookup exact version

echo bar(); // outputs bar
echo PHP_EOL;

function baz(int $x): int
{
    return $x;
}// returns input argument $x as is

echo baz(5); // outputs 5
echo PHP_EOL;

function scalarInput(int $x): int
{
    return $x + 2;
}

// return $x + 2, but leaves the original $x unchanged.
$a = 4;

// will print 6
echo scalarInput($a);

echo PHP_EOL;

// will print 4, $a is not changed
echo $a;

echo PHP_EOL;

function scalarInput2(int $x):int
{
	$x = $x + 2;
	return $x;
}
// also return $x + 2, but leaves the original input unchanged, because a copy is passed into the function.

$b = 7;

// will print 9
echo scalarInput2($b);

echo PHP_EOL;

// will print 7, $b is not changed
echo $b;

echo PHP_EOL;

/*
 * Passing scalar by reference
 */
function byReference(int &$x): void // void return type available since php 7.1
{
	$x = 2;
}
// returns nothing (void or null)
// assigns the value of 2 to $x and does nothing else. The original input variable will be changed, because $x is passed by reference. To pass a scalar parameter by reference, prefix it with an &. Parameters that are objects are always passed by reference, there is no need to prefix them. Scalars are not passed by reference by default, a copy of the original input is passed to the function instead
// if you pass a literal, such as 6, you will get a warning that only variables can be passed by reference. No reference exists for a literal integer such as 6, so 6 cannot by passed by reference.

$b = 6;
echo byReference($b); // outputs nothing, because nothing is returned
echo PHP_EOL;
echo $b; // outputs 8, because $b has been changed by the function

echo PHP_EOL;
/*
 * Anonymous function called directly
 */
echo (function(float $value): int{
	if (0 <= $value) {
		return 1;
	}

	return -1;
})(2.3);

echo PHP_EOL;

$callable = function(float $value): int{
	if (0 <= $value) {
		return 1;
	}

	return -1;
};

echo $callable(-11.4); // will print -1, because -11.4 is less than 0.

echo PHP_EOL;

/*
 * Variable functions
 */
$callable = 'strtolower';
echo $callable('Foo'); // will print foo;

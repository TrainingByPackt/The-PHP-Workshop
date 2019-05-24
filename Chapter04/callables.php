<?php
/*
 * This file demonstrates different kinds of callables
 *
 * Question: are language constructs callables?
 */

// simplest callable is a function
function foo()
{
}

echo is_callable('foo') ? '"foo" is callable' : '"foo" is NOT a callable', PHP_EOL;

// an anonymous function is also a callable
if (true === is_callable(function () {})) {
    echo 'anonymous function is a callable';
} else {
    echo 'anonymous function is NOT a callable';
}

// print a newline every now and then, so that the output on your screen is more readable
echo PHP_EOL;

// variables that hold the name of a function
$var = 'strtoupper';

echo is_callable($var) ? '$var holding "strtoupper" is callable' : '$var holding "strtoupper" is NOT a callable', PHP_EOL;

// an array with two entries, the first an object, the second one of its public methods is callable

// first you need a class, only here to demonstrate a certain type of callable
class CallMe {
    public function showMeTheMagic(): string
    {
        return 'Magic it is';
    }
}

// now define the array that is callable
$callableArray = [new CallMe(), 'showMeTheMagic'];

// and now call it and print the return value
echo $callableArray();
echo PHP_EOL;

// just for completeness, not about callables:
// the above call is the equivalent of:
$callMe = new CallMe();
echo $callMe->showMeTheMagic();
echo PHP_EOL;

// or even, also for completeness
echo (new CallMe)->showMeTheMagic();
echo PHP_EOL;

// and lastly, the fifth type of callable I know of:
// we need another class:
class YouCanCallMeDirectlyLikeAFunction {
    public function __invoke()
    {
        return 'See, you called me like a function.';
    }
}

// instantiate an object from the class and now you have another callable
$youCanCallMeDirectlyLikeAFunction = new YouCanCallMeDirectlyLikeAFunction;

// let's call it and echo its return value:
echo $youCanCallMeDirectlyLikeAFunction();

echo PHP_EOL;

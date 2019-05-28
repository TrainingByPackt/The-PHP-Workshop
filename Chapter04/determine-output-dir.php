<?php
/**
 * Below is an example of a function with a single parameter.
 *
 * It accepts one argument (the value of the parameter).
 *
 * The parameter is optional, because it has a default value.
 *
 * This means that you do not need to specify the argument.
 *
 * If you do not specify the argument, the default value will be used.
 */

/**
 * @param string $systemTempDirectory
 * @return string
 */
function determineOutputDirectory(string $systemTempDirectory = '/tmp'): string
{
    return $systemTempDirectory . DIRECTORY_SEPARATOR . 'output';
}

// we do not call the function in this example file, see the unit test for examples of usage.

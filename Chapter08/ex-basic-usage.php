<?php

echo 'Script start.', PHP_EOL;

try {

    if (!isset($argv[1])) {
        throw new Exception('Argument #1 is required.');
    }

    echo $argv[1], PHP_EOL;

} catch (Exception $e) {

    echo 'ERROR: ', $e->getMessage(), PHP_EOL;

} finally {

    echo "Finally block gets executed.\n";

}

echo 'Script end.', PHP_EOL;

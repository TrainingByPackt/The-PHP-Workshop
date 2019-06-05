<?php

$text = "We would like to see if any spaces followed by three word characters are in this text";

// i is a modefier, that makes the pattern case-insensitive
$pattern = "/\s\w{3}/i";

// emtpy matches array, passed by reference
$matches = [];

// now call the function
if (1 === preg_match($pattern, $text, $matches)) {
    echo 'Found a space followed by three word characters in the text';
} else {
    echo "Did NOT find a space followed by three word characters in the text";
}

print_r($matches);

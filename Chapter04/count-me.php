<?php

function countMe()
{
    // we enter function scope here
    // $count is pulled from global scope using the keyword global
    global $count;

    $count++;
}


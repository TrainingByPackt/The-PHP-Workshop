<?php

$professions = ["Doctor", "Teacher", "Programmer", "Lawyer", "Athlete"];

$subjects =  ["Mathematics", "Computer Programming", "Business English", "Graph Theory"];

foreach ($professions as $profession) {
        echo "The Profession is $profession. " . PHP_EOL;

        for ($i = 0; $profession === 'Teacher' && $i < sizeof($subjects); $i++) {
                echo " ". $subjects[$i] . PHP_EOL;
        }
}


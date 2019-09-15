<?php

$professions = ["Doctor", "Teacher", "Programmer", "Lawyer", "Athlete"];

$subjects =  ["Mathematics", "Computer Programming", "Business English", "Graph Theory"];
$total_subjects = sizeof($subjects);

foreach ($professions as $profession) {
        echo "The Profession is $profession. " . PHP_EOL;

        for ($i = 0; $profession === 'Teacher' && $i < $total_subjects; $i++) {
                echo " ". $subjects[$i] . PHP_EOL;
        }
}


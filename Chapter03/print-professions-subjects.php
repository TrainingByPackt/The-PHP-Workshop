<?php

$professions = ["Doctor", "Teacher", "Programmer", "Lawyer", "Athlete"];

$subjects =  ["Mathematics", "Computer Programming", "Business English", "Graph Theory"];

foreach ($professions as $profession) {
        echo "The Profession is $profession. \n";

        if ($profession==='Teacher') {
                foreach ($subjects as $name) {
                        echo " $name \n";
                }
	}
}


<?php
//collect data from $_GET or default when there is no $_GET request
$name = isset($_GET['name']) ? $_GET['name'] : 'Joe';
$weightKg = isset($_GET['weight']) ? $_GET['weight'] : 80;
$heightCm = isset($_GET['height']) ? $_GET['height'] : 180;

if ($weightKg <= 0) {
    die('Error, weight only accepts numbers greater then 0');
}

if ($heightCm <= 0) {
    die('Error, height only accepts numbers greater then 0');
}

//convert to meters squared
$heightMetersSquared = $heightCm/100;
$heightTotal = $heightMetersSquared * $heightMetersSquared;

$bmi = number_format($weightKg / ($heightTotal), 1);

echo "<p>Hello $name, your BMI is $bmi</p>";

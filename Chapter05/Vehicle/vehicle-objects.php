<?php

require_once 'Vehicle.php';


$vehicle = new Vehicle();
echo "Make: " . $vehicle->getMake() . "\n";
echo "Model: " . $vehicle->getModel() . "\n";
echo "Color: " . $vehicle->getColor() . "\n";
echo "No of wheels: " . $vehicle->getNoOfWheels() . "\n";
echo "Engine No: " . $vehicle->getEngineNumber() . "\n\n";

$vehicle1 = new Vehicle('Honda', 'Civic', 'Red', 4, '23CJ4567');
echo "Make: " . $vehicle1->getMake() . "\n";
echo "Model: " . $vehicle1->getModel() . "\n";
echo "Color: " . $vehicle1->getColor() . "\n";
echo "No of wheels: " . $vehicle1->getNoOfWheels() . "\n";
echo "Engine No: " . $vehicle1->getEngineNumber() . "\n\n";
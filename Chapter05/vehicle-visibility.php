<?php

require_once 'Vehicle.php';


$vehicle = new Vehicle();
echo "Make: " . $vehicle->make . "\n";
echo "Model: " . $vehicle->model . "\n";
echo "Color: " . $vehicle->color . "\n";
echo "No of wheels: " . $vehicle->getNoOfWheels() . "\n";
echo "Engine No: " . $vehicle->getEngineNumber() . "\n\n";
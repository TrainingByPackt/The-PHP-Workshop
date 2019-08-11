<?php

require_once 'Vehicle.php';
require_once 'Drive.php';

class Car extends Vehicle implements Drive {

	public $doors = 4; 
	public $passengerCapacity = 5;
	public $steeringWheel = true;
	public $transmission = 'Manual';

	private $hasKeyinIgnition = true;

	public function start(){
		if($this->hasKeyinIgnition) {
			$this->engineStatus = true;
		}
	}

	public function changeSpeed($speed){
		echo "The car has been accelerated to ". $speed. " kph. \n";
	}

	public function changeGear($gear){
		echo "Shifted to gear number ". $gear. ". \n";
	}

	public function applyBreak(){
		echo "All the 4 breaks in the wheels applied. \n";
	}
}


$car = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');

echo "Vehicle Type: " . get_class($car) . "\n";
echo " Make: " . $car->getMake() . "\n";
echo " Model: " . $car->getModel() . "\n";
echo " Color: " . $car->getColor() . "\n";
echo " No of wheels: " . $car->getNoOfWheels() . "\n";
echo " No of Doors: " . $car->doors . "\n";
echo " Transmission: " . $car->transmission . "\n";
echo " Passenger capacity: " . $car->passengerCapacity . "\n\n";


/*
$car1 = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');
$car2 = new Car('Toyota', 'Allion', 'White', 4, '24CJ4568');
$car3 = new Car('Hyundai', 'Elantra', 'Black', 4, '24CJ1234');
$car4 = new Car('Chevrolet', 'Camaro', 'Yellow', 4, '23CJ9397');

echo "Available cars are " . Car::$counter. "\n\n";
*/

/*
$car = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');

$car->start();
echo "The car is " . ($car->getEngineStatus()?'running':'stopped') . "\n";
$car->stop();
echo "The car is " . ($car->getEngineStatus()?'running':'stopped') . "\n";
*/

/*
$car = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');

$car->changeSpeed(65);
$car->applyBreak();
$car->changeGear(4);
$car->changeSpeed(75);
$car->applyBreak();
*/

/*
$car = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');

$car->ownerName = 'John Doe';
echo " Owner: ". $car->ownerName . "\n";
$car->year = 2015;
echo " Year: ". $car->year . "\n";
$car->wipers;

$car->honk();
$car->honk('gently');
$car->honk('louder', 'siren');
*/
<?php

require_once 'Vehicle.php';
require_once 'Drive.php';

class Motorcycle extends Vehicle implements Drive {
	public $noOfWheels =  2;
	public $stroke = 4;//Todo: change to style: cruiser, sport bike, standard

	private $hasKey = true;
	private $hasKicked = true;


	public function start(){
		if($this->hasKey && $this->hasKicked) {
			$this->engineStatus = true;
		}
	}

	public function changeSpeed($speed){
		echo "The motorcycle has been accelerated to ". $speed. " kph. \n";
	}

	public function changeGear($gear){
		echo "Gear shifted to ". $gear. ". \n";
	}

	public function applyBreak(){
			echo "The break applied. \n";
	}

	function getPrice(){
		return $this->price - $this->price * 0.05;
	}
}


/*
$motorcycle = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');

echo "Vehicle Type: " . get_class($motorcycle) . "\n";
echo " Make: " . $motorcycle->make . "\n";
echo " Model: " . $motorcycle->model . "\n";
echo " Color: " . $motorcycle->color . "\n";

echo " No of wheels: " . $motorcycle->noOfWheels . "\n";
echo " No of strokes: " . $motorcycle->stroke . "\n\n";
*/


/*
$motorcycle1 = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');
$motorcycle2 = new Motorcycle('Suzuki', 'Gixxer SF', 'Blue', 2, '53WVC14599');
$motorcycle2 = new Motorcycle('Harley Davidson', 'Street 750', 'Black', 2, '53WVC14234');
echo "Available motorcycles are " . Motorcycle::$counter. "\n\n";
*/

/*
$motorcycle = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');

$motorcycle->start();
echo "The motorcycle is " . ($motorcycle->getEngineStatus()?'running':'stopped') . "\n";
$motorcycle->stop();
echo "The motorcycle is " . ($motorcycle->getEngineStatus()?'running':'stopped') . "\n";
*/


$motorcycle = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');

$motorcycle->changeSpeed(45);
$motorcycle->changeGear(3);
$motorcycle->applyBreak();


/*
$motorcycle = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');
$motorcycle->setPrice(5000);
echo "The price is  ". $motorcycle->getPrice() . "\n";
*/
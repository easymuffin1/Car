<?php
	
	include_once('car.php');
	include_once('raceCar.php');
	
	programStart();
	
	function programStart(){	
		
		$myCar = new Car("BMW", "E92", "black", 3);
		$otherCar = new Car("Ferrari", "FF", "red", 2);
		
		echo $myCar->helloCar() . "\n";
		echo $otherCar->helloCar() . "\n";
		
		echo $otherCar->getColor()."\n";
		$otherCar->setColor("blue");
		echo $otherCar->getColor()."\n";
		
		echo introduceCar($myCar);
		echo "-----------------------------\n";
		
		$myRaceCar = new RaceCar(200);
		echo "HP = " . $myRaceCar->getHP() . "\n";
		echo "VMax = " . $myRaceCar->getVMax() . "\n";
		echo "Acceleration = " . $myRaceCar->getAcceleration() . "\n";
		
		echo "\n\n\n";
	}
	 
	function introduceCar(Car $c){
		return "Hello! It's me - your car! " . $c->getColor() . " " . $c->getBrand() . " " . $c->getModel() . " " . $c->getNumberOfDoors() . "\n";
	}

?>

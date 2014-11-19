<?php

	include_once('raceCarInterface.php');
	include_once('engine.php');
	
	class RaceCar extends Car implements RaceCarInterface{
		private $engine;

		public function RaceCar($hp){	
			$this->engine = new Engine($hp);			
		}
		
		public function getVMax(){
			return pow($this->engine->getHP(), 1/3) * 39;
		}
		
		public function getAcceleration(){
			return pow($this->engine->getHP(), 1/40) * 5;
		}
		
		public function getHP(){
			return $this->engine->getHP();
		}
	}

?>
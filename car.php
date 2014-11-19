<?php

include_once ('carInterface.php');

class Car implements CarInterface{

	private $brand;
	private $color;
	private $model;
	private $numberOfDoors;
	
	public function Car($b, $m, $c, $nod){
		$this->brand = $b;
		$this->color = $c;
		$this->model = $m;
		$this->numberOfDoors = $nod;	
	}
	
	public function setBrand($brand){
		$this->brand = $brand;
	}
	
	public function getBrand(){
		return $this->brand;
	}
	
	public function setColor($color){
		$this->color = $color;
	}
	
	public function getColor(){
		return $this->color;
	}
	
	public function setModel($model){
		$this->model = $model;
	}
	
	public function getModel(){
		return $this->model;
	}	
	
	public function setNumberOfDoors($numberOfDoors){
		$this->numberOfDoors = $numberOfDoors;
	}
	
	public function getNumberOfDoors(){
		return $this->numberOfDoors;
	}
	
	public function helloCar(){
		return "Hello! This is me  - your car: " . $this->color . " " . $this->brand . " " . $this->model . " " . $this->numberOfDoors; 
	}

}

?>
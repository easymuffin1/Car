<?php

include_once('engineInterface.php');

class Engine implements EngineInterface{
	
	private $hp;
	
	public function Engine($hp){
		$this->hp = $hp;
	}
	
	public function getHP(){
		return $this->hp;
	}
	
	public function setHP($hp){
		$this->hp = $hp;
	}
}

?>
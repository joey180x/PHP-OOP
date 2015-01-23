<?php
class Space {
	public $stars;
	public $moon;
	public $galaxy;
	public $alien;
	public $amazing;

	function __construct($galaxy, $moon, $alien, $amazing, $stars) {
		$this->stars=$stars;
		$this->moon=$moon;
		$this->galaxy=$galaxy;
		$this->alien=$alien;
		$this->amazing=$amazing;
	}
	function getName(){
		return "Space is just" . $this->amazing.
				"they're might be". $this->alien;
	}

}
class Planet extends Space {
	function awesome(){
	return $this->moon;	
	}
}

class Environment extends Space{
	function nature(){
	return $this->galaxy;
	}
}
$planet = new Planet("Red", "Facinating","Moon",21);
print "Planet 1 is a" .$planet->getName();




class Dolphin {
	public $flippers;
	public $animal;
	public $yummy;
	public $water;
	public $swim;

	function __construct($flippers, $animal, $yummy, $water, $swim) {
		$this->flippers=$flippers;
		$this->animal=$animal;
		$this->yummy=$yummy;
		$this->water=$water;
		$this->swim=$swim;
	}
	function getName(){
		return "Dolphin is" . $this->yummy.
				"they're might be". $this->water;
	}

}
class Danger extends Dolphin {
	function swimming(){
	return $this->swim;	
	}
}

class Environment extends Dolphin{
	function pollution(){
	return $this->water;
	}
}
$ocean = new Ocean("Red", "Blue","Clean",21);
print "Ocean 1 is a" .$water->getName();







class Chicken {
	public $coupe;
	public $cluck;
	public $eggs;
	public $hen;
	public $yum;

	function __construct($coupe, $cluck, $eggs, $hen, $yum) {
		$this->coupe=$coupe;
		$this->cluck=$cluck;
		$this->egg=$eggs;
		$this->hen=$hen;
		$this->yum=$yum;
	}
	function getName(){
		return "Chicken is" . $this->yum.
				"they're might be". $this->eggs;
	}

}
class Bok extends Chicken {
	function fried(){
	return $this->yum;	
	}
}

class DeepFried extends Chicken{
	function delicious(){
	return $this->yum;
	}
}
$coupe = new coupe("Orange", "Facinating","Yummy",21);
print "The new" .$coupe->getName();










?> 
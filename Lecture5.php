<?php
class Code {
	public $java;
	public $php;
	public $html;
	public $swift;
	public $css;

	function __construct($java,$php,$html,$swift,$css){
		$this->java=$java;
		$this->php=$php;
		$this->html=$html;
		$this->swift=$swift;
		$this->css=$css;
	}	

	function getName(){
		return" my favorite code is " .$this->html.
				" and my second is " .$this->css.
				" and last but not least is " .$this->java.".";
	}

}
class Database extends code{
	function __construct($java,$php,$html,$swift,$css){
		parent::__construct($java,$php,$html,$swift,$css);
	}
	function code4life() {
	return $this->java;
	}
}


class Learn extends Code{
	function __construct($java,$php,$html,$swift,$css){
		parent::__construct($java,$php,$html,$swift,$css);
	$this->css=$css;
	}

	function refactor(){
	return $this->bark;
	}
}

$database=new Database("Php","Data","Html","C","Css");
print"Code is love" .$database->getName();








class Color {
	public $green;
	public $white;
	public $yellow;
	public $purple;
	public $blue;

	function __construct($green,$white,$yellow,$purple,$blue){
		$this->blue=$blue;
		$this->purple=$purple;
		$this->yellow=$yellow;
		$this->white=$white;
		$this->green=$green;
	}	

	function getName(){
		return" my favorite color is " .$this->purple.
				" and my second favorite " .$this->blue.
				" and last but not least " .$this->yellow.".";
	}

}
class Favorite extends Color{
	function __construct($green,$white,$yellow,$purple,$blue){
		parent::__construct($green,$white,$yellow,$purple,$blue);
	}
	function crayon() {
	return $this->bestcolor;
	}
}


class Worst extends Color{
	function __construct($green, $white, $yellow ,$purple, $blue){
		parent::__construct($green,$white,$yellow,$purple,$blue);
	$this->green=$green;
	}

	function pencil(){
	return $this->working;
	}
}

$colors= new Worst("red","orange", "aqua", "maroon", "pink");
print"Best colors are " . $colors->getName();












class xbox {
	public $halo;
	public $cod;
	public $farcry;
	public $bick;

	function __construct($one,$halo,$cod,$farcry,$bick){
		$this->one=$one;
		$this->halo=$halo;
		$this->html=$cod;
		$this->farcry=$farcry;
		$this->bick=$bick;
	}	

	function getName(){
		return"My favorite game is" .$this->cod.
				"and my second is" .$this->halo.
				"and last but not least" .$this->farcry.".";
	}

}
class Best extends xbox{
	function __construct($halo,$cod,$farcry,$bick,$one){
		parent:__construct($one,$halo,$cod,$farcry,$bick);
	$this->one=$one;
	}
	function code4life() {
	return $this->objective;
	}
}


class 2104 extends xbox{
	function __construct($one,$halo,$cod,$farcry,$bick){
		parent::__construct($halo,$cod,$farcry,$bick,$one);
	$this->halo=$halo;
	}

	function refactor(){
	return $this->cod;
	}
}

$videogames= new 2104("2","aw","it", "4", "bick");
print"My favorite games are" .$videogames->getName();






?>
*/
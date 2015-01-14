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
		$this->html->$html;
		$this->swift->$swift;
		$this->css->$css;
	}	

	function getName(){
		return"My favorite code is" .$this->html.
				"and my second is" .$this->css.
				"and last but not least" .$this->java.".";
	}

}
class Database extends code{
	function __construct($java,$php,$html,$swift,$css){
		parent:__construct($java,$php,$html,$swift,$css);
	$this->objective=$objective;
	}
	function code4life() {
	return $this->objective;
	}
}


class Learn extends Code{
	function __construct($java,$php,$html,$swift,$css){
		parent::__construct($java,$php,$html,$swift,$css);
	$this->xcode=$xcode;
	}

	function refactor(){
	return $this->bark;
	}
}

$databse=new Database("Php","Data",1,true);
print"Code is love" .$database->getName();



?>
<?php


//Example 1
class Kim {
	public $firstName = "default name";
	public $lastName = "default last name";
	public $gender = "male";
	public $price = 0;
function getName() {
			return "{$this>firstName}" ."{$this>lastName}";
			
			}
	}

$Kim1 = new Kim();
$Kim1>
firstName = "Kim";
$Kim1>
lastName = "Jong-Un";
print "The Persons's name is {$People1>getName()}.";

//EXAMPLE 2
class Ryan {
		public $firstName = "default name";
		public $lastName = "default last name";
		public $gender = "male";
		public $price = 0;
function getName() {
				return "{$this>firstName}" ."{$this>lastName}";
			
			}
	}

$Ryan1 = new People();
$Ryan1>firstName = "Ryan";
$Ryan1>lastName = "Ryanian";
print "The humans name is {$Ryan1>getName()}.";


//EXAMPLE 3
class Luke {
		public $firstName = "default name";
		public $lastName = "default last name";
		public $gender = "male";
		public $price = 0;
function getName() {
			return "{$this>firstName}" ."{$this>lastName}";
			
			}
	}
$Luke1 = new Luke();
$Luke1>firstName = "Luke";$Luke1>lastName = "Lukian";
print "The Persons’s name is {$Luke1>getName()}.";






//LECTURE 2

	//EXAMPLE 1
class cheese{
		public first = $first;
		public middle = $middle;
		public last = $last;
	
		function__construct($first,$middle,$last) {
			$this­>first = $first;
			$this­>middle = $middle;
			$this­>last = $last;
		}
		function getMe() {
			return "{$this->first}" . "{$this->last}";
		}
	}
	$cheese1 = newcheese("Ryan","R","Ryanian");
	print "cheese1: {$cheese1->getcheese()}";
		//EXAMPLE 2
	class sizes{
		public fierce = $fire;
		public roar = $room;
		public mane = $house;
	
		function__construct($fire,$room,$house) {
			$this­>fierce = $fire;
			$this­> roar = $room;
			this­> mane = $house;
		}
		function getLion() {
			return "{$this->fire}" . "{$this->house}";
		}
	}
	$sizes1 = newsizes("Big","Small","Huge");
	print "sizes1: {$sizes1->getsizes()}";

	//EXAMPLE 3
	class words{
		public movie = $movie;
		public commercial = $commercial;
		public show = $show;
	
		function__construct($movie,$commercial,$show) {
			$this­>movie = $movie;
			$this­>commercial = $commercial;
			$this­>show = $show;
		}
		function getTv() {
			return "{$this->movie}" . "{$this->show}";
		}
	}
	
	$words1 = newwords("Hello","How","Are You");
	print "words1: {$words1->newwords()}";




//ArgumentsandTypesLecture3

 if(is_null('One1')) {
	echo "Three is a object";
	}
		else { 
			echo'Four';
			var_dump(is_object('Five'));
			var_dump(is_object('Six'));
			var_dump(is_object(Seven));
			var_dump(is_object(Eight));
		}


 if(is_null('One2')) {
 	echo "This is null";
 	}
 		else {
 			echo "This is not null";
 			var_dump(is_null('Nine'));
			var_dump(is_null('Ten'));
			var_dump(is_null(Eleven));
			var_dump(is_null(Twleve));
		}

 if (is_resource('One3')) {
 	echo "This is a resource";
 	}
 		else {
 			echo "This is not a resource";
 			var_dump(is_resource('Thirteen'));
			var_dump(is_resource('Fourteen'));
			var_dump(is_resource(Fifteen));
			var_dump(is_resource(Sixteen));
 		}












?>
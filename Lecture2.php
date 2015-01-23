<?php
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
?>


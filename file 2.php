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
	
	class sizes{
		public fierce = $fierce;
		public roar = $roar;
		public mane = $mane;
	
		function__construct($fierce,$roar,$mane) {
			$this­>fierce = $fierce;
			$this­> roar = $roar;
			this­> mane = $mane;
		}
		function getLion() {
			return "{$this->fierce}" . "{$this->mane}";
		}
	}
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

	
	$cheese1 = newcheese("Ryan","R","Ryanian");
	print "cheese1: {$cheese1->getcheese()}";
	
	$sizes1 = newsizes("Big","Small","Huge");
	print "sizes1: {$sizes1->getsizes()}";
	
	$words1 = newwords("Hello","How","Are You");
	print "words1: {$words1->newwords()}";
	?>
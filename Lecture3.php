 <?php
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
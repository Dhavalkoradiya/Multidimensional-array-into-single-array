<?php 
/**
 * Convert a multi-dimensional array into a single-dimensional array.
 * @author Dhaval Koradiya, https://www.linkedin.com/in/dhavalkoradiya | dhavalk01@gmail.com
 * @param  array $array The multi-dimensional array.
 * @return array
 */

// Define function
function multi_to_single($array){
	foreach($array as $key){
		if(is_array($key)){
			$array1 = multi_to_single($key);
			foreach($array1 as $k){
				$new_array[]=$k;
			}
		}
		else{
			$new_array[]=$key;
		}
	}
	return $new_array;
}

//calling function
$single_array = multi_to_single($multi_array);
?>

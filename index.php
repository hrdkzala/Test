<?php 
// Start Session
session_start();

// Function for array - Convert multi array into single array 
 function array_single($array) { 
	  if (!is_array($array)) { 
	    return FALSE; 
	  } 
	  $result = array(); 
	  foreach ($array as $key => $value) { 
	    if (is_array($value)) { 
	      $result = array_merge($result, array_flatten($value)); 
	    } 
	    else { 
	      $result[] = $value; 
	    } 
	  } 
	  return $result; 
}  

$array = [[1,2,[3,[5,6,7,8,[9,10,11,12,13,14,15,[16]]]]],4];

$result = array_single($array);


print_r($result);

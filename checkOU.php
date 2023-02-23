<?php 
	include('getFront0 - under.php');
	
	
	$checkPlayerUnder = '/Garland/';
	
	$result = preg_match($checkPlayerUnder,$matches);
	
	echo "<pre>"; print_r($result); "</pre>";

?>
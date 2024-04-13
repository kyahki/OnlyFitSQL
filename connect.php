<?php 
	$connection = new mysqli('localhost', 'root','','dbvasquezf3');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}
		
?>
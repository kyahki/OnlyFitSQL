<?php 
	$connection = new mysqli('localhost', 'root','','dbvasquez');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}
		
?>
<?php
	$conn = new mysqli("localhost","root","","farmerad");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>
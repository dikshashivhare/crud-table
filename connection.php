<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "crud-php";
	$conn = mysqli_connect($servername,$username,$password,$dbname);	

	if($conn)
	{
		echo "connection ok";
	}

?>
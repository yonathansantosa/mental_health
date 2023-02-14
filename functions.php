<?php
	
	$servername = "localhost";
	$database = "rumah_teknologi2";
	$username = "root";
	$password = "";

  $conn = mysqli_connect($servername, $username, $password, $database);
    
	function redirect($page)
	{
		header("Location: $page");
		exit;
	}

?>
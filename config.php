<?php 
	session_start();

	// Connect to database
	$conn = mysqli_connect("localhost", "dummy", "dummy123", "blogphp");
    
    // If connection failed to connect
    if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/BlogProject/');
?>
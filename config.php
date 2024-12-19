<?php
		$servername = "kriszel";
		$username = "catunao"; 
		$password = "saysay"; 
		$dbname = "mybook"; 

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {    
			die("Connection failed: " . $conn->connect_error);

		}
?> 

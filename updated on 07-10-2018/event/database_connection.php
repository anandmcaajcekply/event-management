<?php

//database_connection.php

//$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');

$conn=mysqli_connect("localhost","root","","testing");
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

?>
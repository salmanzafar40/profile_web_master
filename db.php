<?php
 
 $server = "localhost";
 $dbname = "web";
 $uname  = "root";
 $pass   = "";

 $conn = mysqli_connect("$server", "root", "$pass", "$dbname");
 //var_dump($conn);


		// Check connection
		if (mysqli_connect_errno())
 		 {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  			}


?>
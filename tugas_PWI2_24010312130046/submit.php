<!--Nama		: Adik Istanto 				(24010312130046)
	Deskripsi	: proses submit
-->
<?php
			$nisbn =$_GET['isbn'];
			$author =$_GET['author'];
			$title =$_GET['title'];
			$price =$_GET['price'];
			// Include our login information
			require_once('db_login.php');
			// Connect
			$con = new mysqli($db_host, $db_username, $db_password,$db_database);
			if ($con->connect_errno){
				die ("Could not connect to the database: <br />". mysqli_connect_error( ));
				}
			$sql = "INSERT INTO books (isbn,author,title,price) values('$isbn','$author','$title','$price')";
			
			if ($con->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $con->error;
			}
			$con->close();
?>
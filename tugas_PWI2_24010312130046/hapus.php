<!--Nama		: Adik Istanto 				(24010312130046)
	Deskripsi	: proses hapus
-->
<?php
			$isbn =$_GET['isbn'];
			// Include our login information
			require_once('db_login.php');
			// Connect
			$con = new mysqli($db_host, $db_username, $db_password,$db_database);
			if ($con->connect_errno){
				die ("Could not connect to the database: <br />". mysqli_connect_error( ));
				}
			$sql = "DELETE FROM books WHERE isbn='".$isbn."'";

			if ($con->query($sql) === TRUE) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . $con->error;
			}
			$con->close();
?>
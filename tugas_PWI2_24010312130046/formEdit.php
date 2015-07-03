<!--Nama		: Adik Istanto 				(24010312130046)
	Deskripsi	: menampilkan form edit
-->
<?php
			$nisbn =$_GET['q'];
			// Include our login information
			require_once('db_login.php');
			// Connect
			$con = new mysqli($db_host, $db_username, $db_password,$db_database);
			if ($con->connect_errno){
				die ("Could not connect to the database: <br />". mysqli_connect_error( ));
				}
			//Asign a query
			$query = " SELECT * FROM books WHERE isbn = '".$nisbn."'";
			// Fetch and display the results
			$row = mysql_fetch_row($query);
			echo '<h1>Form Edit</h1><br>';
			echo '<form>';
			echo '<input type="number" name="isbn"  required="required" value="'.$row['1'].'"/> <br><br>';
			echo '<input type="text" name="judul" placeholder="Judul" required="required" value="'.$row['2'].'"/><br><br>';
			echo '<input type="text" name="penulis" placeholder="Penulis" required="required" value="'.$row['3'].'"/><br><br>';
			echo '<input type="number" name="harga" placeholder="Harga" required="required" value="'.$row['4'].'"/><br><br>';
			echo '<input type="button" name="submit" value="Tambah" onclick="submitForm()"/><br>';
?>
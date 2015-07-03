<?php
				require_once('db_login.php');
				$con = new mysqli($db_host, $db_username, $db_password,$db_database);
				if ($con->connect_errno){
					die ("Could not connect to the database: <br />". mysqli_connect_error( ));
				}
				$tipe = $_GET['city'];
				$query= "SELECT * FROM books WHERE author like '%".$tipe."%'";
	
				$result = $con->query($query);
				if (!$result){
					die ("Could not query to the database: <br />". mysqli_connect_error( ));
				}
				$row = $result->fetch_array();
				echo '<table border=0>';
				echo '<tr><td width:150>ISBN</td><td>:&nbsp' .$row['isbn'].'</td></tr><br>';
				echo '<tr><td>Author</td><td>:&nbsp'.$row['author'].'</td></tr><br>';
				echo '<tr><td>Title</td><td>:&nbsp'.$row['title'].'</td></tr><br>';
				echo '<tr><td>Price</td><td>:&nbsp'.$row['price'].'</td></tr></table>';
				$con->close();
		?>	
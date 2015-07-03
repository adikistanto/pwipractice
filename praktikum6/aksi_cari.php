<html>
	<head>
		<title>Hasil Pencarian</title>
		<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<center>
			<h2>Hasil Pencarian</h2>
		<?php
		if (isset($_POST["submit"])){
				require_once('db_login.php');
				$con = new mysqli($db_host, $db_username, $db_password,$db_database);
				if ($con->connect_errno){
					die ("Could not connect to the database: <br />". mysqli_connect_error( ));
				}
				$tipe = $_POST['tipe'];
				$kunci = $_POST["id_cari"];
				$query= "SELECT * FROM books join book_reviews on books.isbn=book_reviews.isbn where ".$tipe." like '%".$kunci."%'";
	
				$result = $con->query($query);
				if (!$result){
					die ("Could not query to the database: <br />". mysqli_connect_error( ));
				}
				
				while ($row = $result->fetch_array()){
					echo'<table><tr><th>ISBN</th><th>Author</th><th>Title</th><th>Price</th><th>Review</th></tr>';
					echo '<tr>';
					echo '<td>'.$row['isbn'].'</td>';
					echo '<td>'.$row['author'].'</td> ';
					echo '<td>'.$row['title'].'</td> ';
					echo '<td>'.$row['price'].'</td>';
					echo '<td>'.$row['review'].'</td>';
					echo '</tr>';
				}
				echo '<tr><td colspan="5">Total Rows = '.$result->num_rows.'</td></tr></table>';
				$con->close();
				
			}
		?>	
		<br><br><a href="form_cari.php">Kembali ke Form >></a>
		</center>
	</body>
</html>
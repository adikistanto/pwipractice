<!--Nama		: Adik Istanto 				(24010312130046)
	Deskripsi	: halaman utama
-->
<html>
	<head>
		<title>PerpusKu</title>
		<script type="text/javascript" src="ajax.js"></script>
		<style type="text/stylesheet">
		</style>
	</head>
	<body>
		<center>
		<h1>PerpustakaanKU</h1>
		<form>
		<input type="button" value="Tambah Buku" onclick="openForm()"/><br><br>
		
		<table border="1" ">
			<tr>
				<th>ISBN</th><th>Author</th><th>Title</th><th>Price</th><th>Action</th>
			</tr>
				<?php
					// Include our login information
					require_once('db_login.php');
					// Connect
					$con = new mysqli($db_host, $db_username, $db_password,$db_database);
					if ($con->connect_errno){
						die ("Could not connect to the database: <br />". mysqli_connect_error( ));
						}
					//Asign a query
					$query = " SELECT * FROM books ";
					// Execute the query
					$result = $con->query($query);
					if (!$result){
						die ("Could not query the database: <br />". mysqli_error($con));
					}
					// Fetch and display the results
					while ($row = $result->fetch_object()){
						echo '<tr>';
						echo '<td>'.$row->isbn.'</td>';
						echo '<td>'.$row->author.'</td> ';
						echo '<td>'.$row->title.'</td> ';
						echo '<td>'.$row->price.'</td>';
						echo '<td>&nbsp<input type="button" onclick="editData('.$row->isbn.')" value="edit"/>&nbsp
								  <input type="button" onclick="hapusData('.$row->isbn.')" value="hapus"/>&nbsp
							</td>';
						echo '</tr>';
					}
					echo '<br />
			</table><br>';
			echo 'Total Rows = '.$result->num_rows.'<br />';
					$con->close();
				?>
			</form>
		<div id="result"></div>
		</center>
	</body>
</html>
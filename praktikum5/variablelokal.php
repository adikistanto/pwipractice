<html>
	<head>
		<title>Hello World</title>
	</head>
	<body>
		<?php			
			function diskon(){
				$harga = 1000;
				$harga = 0.2 * $harga;
			}
			$harga = 2000;
			diskon();
			echo 'harga = '.$harga.'<br />';
			?>
		<br><br><a href="../index.php">back</a>
	</body>
</html>
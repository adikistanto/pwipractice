<html>
	<head>
		<title>Hello World</title>
	</head>
	<body>
		<?php			
			// Define the function
			function diskon2( ){
				// Define harga as a static variable
				static $harga = 1000;
				$harga = 0.8 * $harga;
				
				echo 'harga = '.$harga.'<br />';
			}
			// Set harga to 2000
			$harga = 30;
			// Call the function twice
			diskon2();
			diskon2();
			// Display the harga
			echo 'harga = '.$harga.'<br />';

			echo htmlentities($_SERVER["PHP_SELF"]).'<br><br>';
			
			define("PWI", "Permograman Web dan Internet ");
			echo 'Hari ini sedang praktikum '.PWI.'<br />';
			$constant_name = "PWI";
			echo 'Hari ini sedang praktikum '.constant($constant_name).'<br />';

			//konstanta bawaan PHP
			echo 'File yang sedang diproses "'. __FILE__ .' pada baris "'
			?>
		<br><br><a href="../index.php">back</a>
	</body>
</html>
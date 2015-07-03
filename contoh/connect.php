<!--Nama		: Kana Rizki 				(24010312110067)
				  Muhammad Sofi Yuniarto	(24010312130059)
	Deskripsi	: Untuk menghubungkan dengan database
-->

<?php
		$con = mysqli_connect("localhost","root" ,"", "mahasiswa");
		if(mysqli_connect_errno()){
			echo 'Tidak dapat menghubungkan database';
			exit();
		}
?>
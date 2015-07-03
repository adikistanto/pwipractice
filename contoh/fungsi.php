<!--Nama		: Kana Rizki 				(24010312110067)
				  Muhammad Sofi Yuniarto	(24010312130059)
	Deskripsi	: File fungsi
-->

<?php
	include('connect.php');
	if(isset($_REQUEST['aksi']) && $_REQUEST['aksi']!=''){
		$aksi = $_REQUEST['aksi'];
		call_user_func($aksi,$_REQUEST,$con);
	}
	function saveData($data,$con){
		$nama = $con->real_escape_string($data['nama']);
		$nim = $con->real_escape_string($data['nim']);
		$jurusan = $con->real_escape_string($data['jurusan']);
		$asal = $con->real_escape_string($data['asal']);
		$sql = "INSERT INTO data (nama,nim,jurusan,asal) values('$nama','$nim','$jurusan','$asal')";
		if($con->query($sql)){
			showData($data,$con);
		}
		else{
			echo "Gagal!";
		}
	}

	function showData($data,$con){
	$sql = "select * from data order by id";
	$data = $con->query($sql);
	$str='<tr class="head"><td>nama</td><td>nim</td><td>jurusan</td><td>asal</td><td></td></tr>';
	if($data->num_rows>0){
		while( $row = $data->fetch_array(MYSQLI_ASSOC)){
		  $str.="<tr id='".$row['id']."'><td>".$row['nama']."</td><td>".$row['nim']."</td><td>".$row['jurusan']."</td><td>".$row['asal']."</td><td><input type='button' class='edit' value='Edit'/> <input type='button' class='delete' value='Delete'></td></tr>";
		}
	}else{
		$str .= "<td colspan='5'>Tidak ada data yang tersedia</td>";
	} 
echo $str;   
}

	function updateData($data,$con){
		$nama = $con->real_escape_string($data['nama']);
		$nim = $con->real_escape_string($data['nim']);
		$jurusan = $con->real_escape_string($data['jurusan']);
		$asal = $con->real_escape_string($data['asal']);
		$editid = $con->real_escape_string($data['editid']);
		$sql = "UPDATE data SET nama='$nama', nim='$nim', jurusan='$jurusan', asal='$asal' WHERE id=$editid";
		if($con->query($sql)){
			showData($data,$con);
		}
		else{
			echo 'Gagal!';
		}
	}
	  
	function deleteData($data,$con){
    $delid = $con->real_escape_string($data['deleteid']); 
	$sql = "DELETE FROM data WHERE id=$delid";
	if($con->query($sql)){
	  showData($data,$con);
	}
	else{
		echo "error";
	}
}
?>
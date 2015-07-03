<html>
	<head>
		<title>Form Pencarian</title>
		<link href="style.css" rel="stylesheet">
	<head>
	<body>
		<center>
			<form  method="POST" action="aksi_cari.php" autocomplete="off">
			<table class="field">
			<tr><th>Pencarian Buku</th></tr>
			<tr>
				<td>
				<select class="input_field" name="tipe" required="required">
					<option value="">-- Pilih Mode Pencari --</option>
					<option value="author">Autor</option>
					<option value="author">ISBN</option>
					<option value="author">Title</option>
					<option value="author">Price</option>
				</select>
				</td>
			</tr>
			<tr>
				<td><input class="input_field"type="text" name="id_cari" placeholder="Masukan Kata Kunci"required="required"/></td>
			<tr>
			<tr>
				<td><input class="input_field"type="submit" value="Cari" name="submit"></td>
			</td>
			</table>
			</form>
		</center>
	</body>
</html>
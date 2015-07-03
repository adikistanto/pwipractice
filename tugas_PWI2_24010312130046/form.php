<!--Nama		: Adik Istanto 				(24010312130046)
	Deskripsi	: menampilkan form kosong
-->
<?php
	echo '<h1>Form</h1><br>';
	echo '<form>';
	echo '<input type="number" name="isbn" id="isbn"placeholder="ISBN" required="required"><br><br>';
	echo '<input type="text" name="penulis" id="author"placeholder="Judul" required="required"><br><br>';
	echo '<input type="text" name="judul" id="title"placeholder="Penulis" required="required"><br><br>';
	echo '<input type="number" name="harga" id="price" placeholder="Harga" required="required"><br><br>';
	echo '<input type="button" name="submit" value="Tambah" onclick="submitForm()" pla><br>';
?>
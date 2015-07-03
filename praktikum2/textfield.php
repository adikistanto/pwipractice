<!--
	nama file	: textfield.html
	deskripsi	: membuat table
	Pembuat		: adik Istanto 24010312130046
	tanggal		: 9 Oktober 2014


-->
<html>
	<head>
		<title>
			text field
		</title>
	</head>
	<body>
		<div style="margin-left:100px">
			<h4>membuat form</h4>
			<form>
				firt name : <input type="text" name="firstname"/><br>
				lasname name : <input type="text" name="lastname"/><br>
				Password : <input type="password" name="pwd"/><br>
				<input type="button" value="submit"/>
			</form>
			<br><br>
		<!--  ============  radio button ===================-->
			<h4>radio button</h4>
			<form>
				jenis kelamin :<br>
				<input type="radio" name="sex" value="male"/>Male<br>
				<input type="radio" name="sex" value="female"/>Female<br>
			</form>
			
		<!--  ============  textarea ===================-->
			<h4>tekarea</h4>
			
				komen ya :<br>
				<textarea rows="10" cols="30" name="komentar" /></textarea>	
				
		<!--  ============  dropdown list ===================-->
			<h4>dropdown list</h4>
				<form>
					<select>
						<option value="volvo">volvo</option>
						<option value="saab">saab</option>
						<option value="Fiat">Fiat</option>
						<option value="Audi">Audi</option>
					</select>
				</form>
			
			<!--  ============  cekbox ===================-->
			<h4>check box</h4>
				<form>
					<input type="checkbox" value="bike" name="kendaraan"/>Sepeda<br>
					<input type="checkbox" value="motor" name="kendaraan"/>Motor<br>
				</form>
				
			<h4>membuat form action</h4>
			<form method="get" action="login_action.php">
				firt name : <input type="text" name="firstname"/><br>
				lasname name : <input type="text" name="lastname"/><br>
				Password : <input type="password" name="pwd"/><br>
				<input type="button" value="submit"/>
			</form>
			<br><br>
		</div>
		<br><br><footer><a href="../index.php">home</a></footer>
	</body>
</html>
<html>
	<head>
		<title>table css</title>
		<style type="text/css">
			#customers{
				font-family:"Trebichet MS", Arial, Helvetica, sans-serif;
				width:100%;
				border-collapse:collapse;
			}
			#costumers td, #costumers th{
				font-size:1em;
				border:1px solid #98bf21;
				padding:3px 7px 2px 7px
			}
			#costumers th{
				font-size:1.1em;
				test-align:left;
				padding-top:5px;
				padding-bottom:4px;
				background-color:#A7c942;
			}
			#costumers tr.alt td{background-color:yellow;}
		</style>
	</head>
	<body>
		<center>
			<h1> test table</h1>
		</center>
		
		<table id="costumers">
			<tr>
				<th>Company</th>
				<th>Contact</th>
				<th>Country</th>
			</tr>
			<tr class="alt">
				<td>Alferd Juanda</td>
				<td>Maria</td>
				<td>Germany</td>
			</tr>
			<tr>
				<td>Muja Juanda</td>
				<td>Giany</td>
				<td>French</td>
			</tr>
			<tr class="alt">
				<td>Muja Juanda</td>
				<td>Giany</td>
				<td>French</td>
			</tr>
			<tr>
				<td>Muja Juanda</td>
				<td>Giany</td>
				<td>French</td>
			</tr>
			<tr class="alt">
				<td>Muja Juanda</td>
				<td>Giany</td>
				<td>French</td>
			</tr>
		</table>
			<a href="../index.php">home<a>
	</body>
</html>
<!--Nama		: Kana Rizki 				(24010312110067)
				  Muhammad Sofi Yuniarto	(24010312130059)
	Deskripsi	: File utama ajax table
-->

<html>
	<head>
		<title>Ajax Table</title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js">
		</script>		
	</head>	
	<body>
		<h2><p align='center'><u>Edit Data Table Menggunakan Ajax<u></p></h2>
		<table id='tabajax' cellspacing="0"></table>
		<script type="text/javascript" src="ajax.js"></script>
	</body>
	<style type="text/css">
		#tabajax{
			width:960px;
			margin:100px auto;
			font-family:Tahoma,Arial,Verdana,sans-serif;
			font-size:13px;
			padding:4px;
			cellpadding:0;
			cellspacing:0;
		}
		.head{
			background:lightgreen;
			align:"center";
		}
		#tabajax tr td{
			padding: 8px;
			#text-transform:capitalize;
			border:1px solid #d1d1d1;
		}
		.head td{
			border:0px !important;
		}
		.hightlight{
			border:1px solid #9F1319;
			background:url(img/iconCaution.gif) no-repeat 2px !important;
		}
		</style>
</html>
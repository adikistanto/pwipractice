/*Nama		: Adik Istanto 				(24010312130046)
 Deskripsi	: Fungsi Ajax
*/
function openForm() {
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("result").innerHTML = xmlhttp.responseText;
						}
					}
					xmlhttp.open('POST','form.php',true);
					xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xmlhttp.send(data);
				}
function editData(str) {
				if (str == "") {
					document.getElementById("result").innerHTML = "";
					return;
				} else {
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("result").innerHTML = xmlhttp.responseText;
						}
					}
					xmlhttp.open("GET","formEdit.php?q="+str,true);
					xmlhttp.send(null);
				}
			}
function hapusData(str) {
				if (str == "") {
					document.getElementById("result").innerHTML = "";
					return;
				} else {
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("result").innerHTML = xmlhttp.responseText;
						}
					}
					xmlhttp.open("GET","hapus.php?isbn="+str,true);
					xmlhttp.send(null);
				}
			}
			
function submitForm() {
				if (str == "") {
					document.getElementById("result").innerHTML = "";
					return;
				} else {
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp = new XMLHttpRequest();
					} else {
						// code for IE6, IE5
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("result").innerHTML = xmlhttp.responseText;
						}
					}
					var isbn= document.getElementById("isbn").value;
					var author= document.getElementById("author").value;
					var title= document.getElementById("title").value;
					var price= document.getElementById("price").value;
					var url= "submit.php?isbn="+isbn+"&author="+author+"&title="+title+"&price="+price;
					xhr.open("GET",url,true);
					xhr.send(null);
				}
			}
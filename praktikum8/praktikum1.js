var xhr;
function ajaxget(){
	if(window.XMLHttpRequest){
		xhr= new XMLHttpRequest();
	}
	else if (window.ActiveXObject){
		xhr = new ActivXObject("Microsoft.XMLHTTP");
	}
	if (xhr ==  null){
		alert("browser tidak support ajax");
	}
	xhr.onreadystatechange = stateChanged;
	var vname= document.getElementById("name").value;
	var vage= document.getElementById("age").value;
	var vurl= "display.php?name="+vname+"&age="+vage;
	xhr.open("GET",url,true);
	xhr.send(null);
}
function stateChanged(){
	if(xhr.readyState==4){
		document.getElementById("result").innerHTML=xhr.responseText;
	}
}
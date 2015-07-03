/*Nama		: 	Kana Rizki 				(24010312110067)
				Muhammad Sofi Yuniarto	(24010312130059)
Nama File	:	ajax.js
*/

var data='';
var action = '';
var savebutton = "<input type='button' class='save' value='Tambahkan'>";
var updatebutton = "<input type='button' class='update' value='Update'>";
var cancel = "<input type='button' class='cancel' value='Cancel'>";
var pre_tds; 
var field_arr = new Array('text','text','text','text');
var field_pre_text= new Array('Add Nama','Add NIM','Add Jurusan','Add Asal');
var field_name = new Array('nama','nim','jurusan','asal'); 

$(function(){
	$.ajax({
		url:"fungsi.php",
		type:"POST",
		data:"aksi=showData",
		cache: false,
		success: function(response){ 
			$('#tabajax').html(response);
				createInput();
			}
	});
	
	//Tambah Data
	$('#tabajax').on('click','.save',function(){
		var nama =  $("input[name='"+field_name[0]+"']");
		var nim = $("input[name='"+field_name[1]+"']");
		var jurusan =$("input[name='"+field_name[2]+"']");
		var asal = $("input[name='"+field_name[3]+"']");
		if(validate(nama,nim,jurusan,asal)){
			data = "&nama="+nama.val()+"&nim="+nim.val()+"&jurusan="+jurusan.val()+"&asal="+asal.val()+"&aksi=saveData";
			$.ajax({
						url:"fungsi.php",
						type:"POST",
						data:data,
						cache: false,
						success: function(response){
							if(response!='Gagal!'){
								$('#tabajax').html(response);
								createInput();
							}
						}
					});
			}	
		else{
			return;
		}	  
	});
	
	//Edit Data
	$('#tabajax').on('click','.edit',function(){
		var edittrid = $(this).parent().parent().attr('id');
		var tds = $('#'+edittrid).children('td');
		var tdstr = '';
		var td = '';
		pre_tds = tds;
		for(var j=0;j<field_arr.length;j++){
				tdstr += "<td><input type='"+field_arr[j]+"' name='"+field_name[j]+"' value='"+$(tds[j]).html()+"' placeholder='"+field_pre_text[j]+"'></td>";
		}
		tdstr+="<td>"+updatebutton +" " + cancel+"</td>";
		$('#createinput').remove();
		$('#'+edittrid).html(tdstr);
	});

	//update data
	$('#tabajax').on('click','.update',function(){
	var edittrid = $(this).parent().parent().attr('id');
	var nama =  $("input[name='"+field_name[0]+"']");
	var nim = $("input[name='"+field_name[1]+"']");
	var jurusan =$("input[name='"+field_name[2]+"']");
	var asal = $("input[name='"+field_name[3]+"']");
	if(validate(nama,nim,jurusan,asal)){
		data = "&nama="+nama.val()+"&nim="+nim.val()+"&jurusan="+jurusan.val()+"&asal="+asal.val()+"&editid="+edittrid+"&aksi=updateData";
		$.ajax({
			url:"fungsi.php",
			type:"POST",
			data:data,
			cache: false,
			success: function(response){
				if(response!='Gagal!'){
					$('#tabajax').html(response);
					createInput();
				}
			}
		 });
	}
	else{
		return;
	}	   
	});
	
	//delete data
	$('#tabajax').on('click','.delete',function(){
		var edittrid = $(this).parent().parent().attr('id');  
		data = "deleteid="+edittrid+"&aksi=deleteData";
		$.ajax({
			url:"fungsi.php",
			type:"POST",
			data:data,
			cache: false,
			success: function(response){
				if(response!='error'){
					$('#tabajax').html(response);
					createInput();
				}
			}	
		});	   
	});
	
	 $('#tabajax').on('click','.cancel',function(){
		var edittrid = $(this).parent().parent().attr('id');  
		$('#'+edittrid).html(pre_tds);
		createInput();
	});	   
});
		   
function createInput(){
	var blankrow = "<tr id='createinput'>";   
	for(var i=0;i<field_arr.length;i++){
		blankrow+= "<td class='ajaxreq'><input type='"+field_arr[i]+"' name='"+field_name[i]+"' placeholder='"+field_pre_text[i]+"' /></td>";
	}
	blankrow+="<td class='ajaxreq'>"+savebutton+"</td></tr>";
	$('#tabajax').append(blankrow);	
}

function validate(nama,nim,jurusan,asal){
	var contact = jQuery('input[name=contact]');		
		if (nama.val()=='') {
			nama.addClass('hightlight');
			return false;
		} else nama.removeClass('hightlight');
		if (nim.val()=='') {
			nim.addClass('hightlight');
			return false;
		} else nim.removeClass('hightlight');
		if (jurusan.val()=='') {
			jurusan.addClass('hightlight');
			return false;
		} else jurusan.removeClass('hightlight');
		if (asal.val()=='') {
			asal.addClass('hightlight');
			return false;
		}else asal.removeClass('hightlight');	
			return true;
}
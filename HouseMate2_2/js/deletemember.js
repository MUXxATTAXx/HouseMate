function deletemiembro(id,idempresa)
{
	var x = id;
	document.getElementById("teste").innerHTML = id;
	document.getElementById("sendvalueid").innerHTML = idempresa;
};
function delegard(id)
{
	var x = id;
	document.getElementById("teste").innerHTML = id;
};
$("#accept").click(function(){
		id = $("#teste").text();
		empresa = $("#value").text();
		//ingresar usuario
		$.ajax({
			type: "POST",
			url: "Call/Empresa/Empresafuncion/acepta.php",
			data: "id="+id+"&empresa="+empresa,
			dataType: "html",
			beforeSend: function(){
				//imagen de carga
				$("#recibidosaj").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
			},
			error: function(){
				alert("error petición ajax");
			},
			success: function(data){
				enviadosmensajes();
				stuffed();
				$("#recibidosaj").empty();
				$("#recibidosaj").append(data).page;
		}
	});

});
$("#denegar").click(function(){
		id = $("#teste").text();
		//ingresar usuario
		$.ajax({
			type: "POST",
			url: "Call/Empresa/Empresafuncion/borra.php",
			data: "id="+id,
			dataType: "html",
			beforeSend: function(){
				//imagen de carga
				$("#recibidosaj").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
			},
			error: function(){
				alert("error petición ajax");
			},
			success: function(data){
				enviadosmensajes();
				$("#recibidosaj").empty();
				$("#recibidosaj").append(data).page;
		}
	});

});
$("#borrar").click(function(){
		id = $("#teste").text();
		//ingresar usuario
		$.ajax({
			type: "POST",
			url: "Call/Empresa/Empresafuncion/delete.php",
			data: "id="+id,
			dataType: "html",
			beforeSend: function(){
				//imagen de carga
				$("#resultborrar").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
			},
			error: function(){
				alert("error petición ajax");
			},
			success: function(data){
				stuffed();
				$("#resultborrar").empty();
				$("#resultborrar").append(data).page;
		}
	});

});
$("#mensajedelete").click(function(){
		id = $("#teste").text();
		//ingresar usuario
		$.ajax({
			type: "POST",
			url: "Call/Empresa/Empresafuncion/forgetit.php",
			data: "id="+id,
			dataType: "html",
			beforeSend: function(){
				//imagen de carga
				$("#resultcos").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
			},
			error: function(){
				alert("error petición ajax");
			},
			success: function(data){
				checkmensajes();
				$("#resultcos").empty();
				$("#resultcos").append(data).page;
		}
	});
});
$("#anuncio").click(function(){
		var1 = $("#titulo").val();
		var2 = $("#anunciotext").val();
		value = $("#value").text();
		//ingresar usuario
		$.ajax({
			type: "POST",
			url: "Call/Empresa/Empresafuncion/anuncionuevo.php",
			data: "var1="+var1+"&var2="+var2+"&value="+value,
			dataType: "html",
			beforeSend: function(){
				//imagen de carga
				$("#anuncioresult").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
			},
			error: function(){
				alert("error petición ajax");
			},
			success: function(data){
				anuncios();
				$("#anuncioresult").empty();
				$("#anuncioresult").append(data).page;
				$('#titulo').val('');
				$('#anunciotext').val('');
		}
	});
});
$("#deletemensaje").click(function(){
		id = $("#teste").text();
		empresa = $("#value").text();
		//ingresar usuario
		$.ajax({
			type: "POST",
			url: "Call/Empresa/Empresafuncion/borramen.php",
			data: "id="+id+"&empresa="+empresa,
			dataType: "html",
			beforeSend: function(){
				//imagen de carga
				$("#resulthomed").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
			},
			error: function(){
				alert("error petición ajax");
			},
			success: function(data){
				anuncios();
				$("#resulthomed").empty();
				$("#resulthomed").append(data).page;
		}
	});

});

function checkmensajes(){
	empresa = $("#value").html();
	$.ajax({
	type: 'POST',
	data: 'idempresa='+empresa,
	url: 'Call/Empresa/Empresafuncion/mensajesenviados.php',
	dataType: 'html',
	success: function(data) {
				$('#checkmensajes').empty();
				$('#checkmensajes').append(data).page;
		},
	});
};
function enviadosmensajes(){
	empresa = $("#value").html();
	$.ajax({
	type: 'POST',
	data: 'idempresa='+empresa,
	url: 'Call/Empresa/Empresafuncion/vermensajes.php',
	dataType: 'html',
	success: function(data) {
				$('#sentmessages').empty();
				$('#sentmessages').append(data).page;
		},
	});
};
function anuncios()
{
	empresa = $("#value").html();
	$.ajax({
	type: 'POST',
	data: 'idempresa='+empresa,
	url: 'Call/Empresa/Empresafuncion/anuncionprint.php',
	dataType: 'html',
	success: function(data) {
				$('#recibidosaj').empty();
				$('#recibidosaj').append(data).page;
		},
	});
};
function getmail(id)
{
var d = document.getElementById("correoenviar");
d.value = id;
};
function changeedit(id)
{
	if(id.length > 5)
	{
		var tama = id.length - 5;
		var largo = 1 + tama;
		var first = id.substr(id.length - largo);
	}
	else {
		var first = id.substr(id.length -1);
	}
	var estru1 = "titore"+first;
	var estru2 = "shower"+first;
	var estru3 = "lab"+first;
	var estru4 = "mensaje"+first
	var estru5 = "edit"+first;
	var estru6 = "m"+first
	var estru7 = "do"+first;
	var estru8 = "notd"+first
 	document.getElementById(estru1).className = "hidme";
	document.getElementById(estru2).className = "";
	document.getElementById(estru3).className = "hidme";
	document.getElementById(estru4).className = "";
	document.getElementById(estru5).className = "hidme";
	document.getElementById(estru6).className = "hidme";
	document.getElementById(estru7).className = "glyphicon glyphicon-ok btn btn-sm btn-success";
	document.getElementById(estru8).className = "glyphicon glyphicon-remove btn btn-sm btn-danger";
	document.getElementById(estru2).focus();
};
function canceledit(id)
{
	if(id.length > 5)
	{
		var tama = id.length - 5;
		var largo = 1 + tama;
		var first = id.substr(id.length - largo);
	}
	else {
		var first = id.substr(id.length -1);
	}
	var estru1 = "titore"+first;
	var estru2 = "shower"+first;
	var estru3 = "lab"+first;
	var estru4 = "mensaje"+first
	var estru5 = "edit"+first;
	var estru6 = "m"+first
	var estru7 = "do"+first;
	var estru8 = "notd"+first;
 	document.getElementById(estru1).className = "pull-left";
	document.getElementById(estru2).className = "hidme";
	document.getElementById(estru3).className = "";
	document.getElementById(estru4).className = "hidme";
	document.getElementById(estru5).className = "glyphicon glyphicon-pencil btn btn-sm btn-warning";
	document.getElementById(estru6).className = "glyphicon glyphicon-remove btn btn-sm btn-danger borrelapa";
	document.getElementById(estru7).className = "hidme";
	document.getElementById(estru8).className = "hidme";
	document.getElementById(estru2).focus();
}
function acceptedit(id)
{
	if(id.length > 3){
		var tama = id.length - 3;
		var largo = 1 + tama;
		var first = id.substr(id.length - largo);
	}
	else {
		var first = id.substr(id.length -1);
	}
	var estru1 = "titup"+first;
	var estru2 = "mensaj"+first;
  var titulo =	document.getElementById(estru1).value;
	var mensaje =	document.getElementById(estru2).value;
	empresa = $("#value").html();
	$.ajax({
	type: 'POST',
	data: 'idempresa='+empresa+"&titulo="+titulo+"&mensaje="+mensaje+"&first="+first,
	url: 'Call/Empresa/Empresafuncion/anuncioedit.php',
	dataType: 'html',
	success: function(data){
				anuncios();
				$('#resulthomed').empty();
				$('#resulthomed').append(data).page;
		},
	});
};
$("#Arios").click(function(){
	id = $("#teste").text();
	empresa = $("#value").text();
	$.ajax({
	type: 'POST',
	data: 'idempresa='+empresa+"&id="+id,
	url: 'Call/Empresa/Empresafuncion/upgrade.php',
	dataType: 'html',
	success: function(data) {
				$('#thetablemiembre').empty();
				$('#thetablemiembre').append(data).page;
			},
		});
	});
$(window).load(function()  {
		stuffed();
		enviadosmensajes();
		checkmensajes();
		anuncios();
	});

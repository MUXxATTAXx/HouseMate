function deletemiembro(id,idempresa)
{	
	var x = id;
	document.getElementById("teste").innerHTML = id;
	document.getElementById("sendvalueid").innerHTML = idempresa;
}
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
				enviadosmensajes();
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
}
function deletemiembro(id,idempresa)
{	
	var x = id;
	document.getElementById("teste").innerHTML = id;
	document.getElementById("idempresa").innerHTML = idempresa;
}
$("#accept").click(function(){
		id = $("#teste").text();
		empresa = $("#sendvalueid").text();
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
				stuffed();
				$("#resultcos").empty();
				$("#resultcos").append(data).page;	
		}
	});							   
});
$("#anuncio").click(function(){
		var1 = $("#titulo").val();
		var2 = $("#anunciotext").val();
		//ingresar usuario													  
		$.ajax({
			type: "POST",
			url: "Call/Empresa/Empresafuncion/anuncionuevo.php",
			data: "var1="+var1+"&var2="+var2,
			dataType: "html",
			beforeSend: function(){
				//imagen de carga
				$("#anuncioresult").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");    
			},
			error: function(){
				alert("error petición ajax");
			},
			success: function(data){ 
				stuffed();
				$("#anuncioresult").empty();
				$("#anuncioresult").append(data).page;	
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
			cache: false,
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
			cache: false,
			success: function(data) {
						$('#sentmessages').empty();
						$('#sentmessages').append(data).page;	
				},
			});
		};
		function getmail(id)
		{
		var d = document.getElementById("correoenviar");
		d.value = id;
		}
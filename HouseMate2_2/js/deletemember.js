function deletemiembro(id)
{	
	var x = id;
	document.getElementById("teste").innerHTML = id;
}
$("#accept").click(function(){
		id = $("#teste").text();
		//ingresar usuario													  
		$.ajax({
			type: "POST",
			url: "Call/Empresa/Empresafuncion/acepta.php",
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
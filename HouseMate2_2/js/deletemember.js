function deletemiembro(id)
{	
	var x = id;
	document.getElementById("teste").innerHTML = id;
}
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
				$("#resultborrar").empty();
				$("#resultborrar").append(data);
				checkmensajes();		
				stuffed();
				enviadosmensajes();
						
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
						$('#checkmensajes').append(data);	
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
						$('#sentmessages').append(data);	
				},
			});
		};
		function getmail(id)
		{
		var d = document.getElementById("correoenviar");
		d.value = id;
		}
		function reloadmensajes()
		{
			checkmensajes();
			stuffed();
			enviadosmensajes();
		}		
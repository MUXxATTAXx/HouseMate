    $("#ask").click(function(){
		  $.ajax({
				type: "POST",
				url: 'Call/Empresa/Empresafuncion/ask.php',
				data: "",
				dataType: "html",
				beforeSend: function(){
					  //imagen de carga
					  $("#respond").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
				},
				error: function(){
					  alert("error petici�n ajax");
				},
				success: function(data){
					$("#respond").empty();
						$("#respond").append(data);
						}
				  });										   
			});

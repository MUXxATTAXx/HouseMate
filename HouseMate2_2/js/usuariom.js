       //comprobamos si se pulsa una boton
        $("#ingresarstuff").click(function(){

		  //obtenemos el texto introducido
		   nombre = $("#nombre").val();
			apellido = $("#apellido").val();
			fechanac = $("#fechanac").val();
			correo = $("#lowerme").val();
			user = $("#user").val();
			contra = $("#contra").val();
			contra2 = $("#contra2").val();
			tiposu = $("#tiposu").val();
		  //ingresar usuario

		  $.ajax({
				type: "POST",
				url: "Call/Funciones/registrar.php",
				data: "nombre="+nombre+"&apellido="+apellido+"&fechanac="+fechanac+"&correo="+correo+"&user="+user+"&contra="+contra+"&contra2="+contra2+"&tiposu="+tiposu,
				dataType: "html",
				beforeSend: function(){
					  //imagen de carga
					  $("#resultadoinsert").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
				},
				error: function(){
					  alert("error petición ajax");
				},
				success: function(data){
					$("#nombre").val("");
					$("#apellido").val("");
					$("#fechanac").val("");
					$("#lowerme").val("");
					$("#user").val("");
					$("#contra").val("");
					$("#contra2").val("");
					$("#resultadoinsert").empty();
					$("#resultadoinsert").append(data);
					loadData();
						}
				  });

			});

	$(window).load(function()  {
				loadData();
			});
			$("#thestart").change(function() {
	usuario = $("#thestart").val();
	//ingresar usuario
	$.ajax({
		type: "POST",
		url: "Call/Funciones/checkmodificar.php",
		data: "usuario="+usuario,
		dataType: 'html',
        cache: false,
		beforeSend: function(){
			  //imagen de carga
			  $("#resultmodiadmin").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
		},
		error: function(){
			  alert("error petición ajax");
		},
		success: function(data){
					$("#resultmodiadmin").empty();
					$("#resultmodiadmin").append(data);
			}
	});
});
function unison(){
	usuario = $("#thestart").val();
    $.ajax({
    type: 'POST',
    url: 'Call/Funciones/checkmodificar.php',
    data: "usuario="+usuario,
	dataType: 'html',
    cache: false,
    success: function(data) {
				$("#resultmodiadmin").empty();
				$("#resultmodiadmin").append(data);
        },
    });
};
$("#adminmodificar").click(function() {
		nombre = $("#b2").val();
		apellido = $("#b3").val();
		correo = $("#b1").val();
		fecha = $("#b4").val();
		if(document.getElementById('b5').checked) {
		contraprevia = "yes";
		} else {
		contraprevia = "no";
		}
		tipo = $("#b6").val();
		$.ajax({
		type: 'POST',
		url: 'Call/Funciones/modificaradmin.php',
		data: "nombre="+nombre+"&apellido="+apellido+"&correo="+correo+"&fecha="+fecha+"&tipo="+tipo+"&contraprevia="+contraprevia,
		dataType: 'html',
		beforeSend: function(){
			  //imagen de carga
			  $("#resultmodiadmin").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
		},
		error: function(){
			  alert("error petición ajax");
		},
		success: function(data){
					$("#resultmodiadmin").empty();
					$("#resultmodiadmin").append(data);
					loadData();
			}
	});
});
        //Borrar usuario
     $("#deleteuser").click(function(){

		  //obtenemos el texto introducido
		  idre = $("#spanme").html();
		  //ingresar usuario
		  $.ajax({
				type: "POST",
				url: "Call/Funciones/admin_eliminar.php",
				data: "idre="+idre,
				dataType: "html",
				beforeSend: function(){
					  //imagen de carga
					  $("#spanme").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
				},
				error: function(){
					  alert("error petición ajax");
				},
				success: function(data){
						$("#mesangemostra").empty();
						$("#mesangemostra").append(data);
						loadData();
						}
				  });
			});
	function loadData(){
    $.ajax({
     type: 'POST',
     url: 'Call/Funciones/update.php',
    success: function(msg) {
            $("#thetablejq").html(msg);
        },
    });
  };

  	function obtener(yo) {
		document.getElementById('spanme').innerHTML = yo;
}
	function cambiar(yo) {
			var changer = document.getElementById("thestart");
			var d = document.getElementById("sd");
			var e = document.getElementById("crear");
			changer.value = yo;
			e.className = "tab-pane fade";
			d.className = "tab-pane fade active in";
			unison();
}
function cambiar2() {
			var changer = document.getElementById("thestart");
			var d = document.getElementById("sd");
			var e = document.getElementById("crear");
			e.className = "tab-pane fade active in";
			d.className = "tab-pane fade";
			unison();
}

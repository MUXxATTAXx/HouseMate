<div class='form-Dl' align='center'> 
	<div class="row">
	<div class="col-sm-2 col-centered">
		<label><?php echo $lang['Usuario'] ?>:</label>
	</div>
		<div class="col-sm-6 col-centered">
            <input id="thestart" class='form-control'>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-6 col-centered">
			<label><?php echo $lang['Nombre']; ?>: </label>
				<input onkeypress="return letras(event)" id="b2" class='form-control' maxlength='20' type='text' name='nombre2' placeholder='<?php echo $lang['Nombre']; ?>' autocomplete="off"/>
		</div>
		<div class="col-sm-6 col-centered">
			<label><?php echo $lang['Apellido'];?>: </label>
				<input onkeypress="return letras(event)" id="b3" class='form-control' maxlength='20' type='text' name='apellido2' placeholder='<?php echo $lang['Apellido']?>' autocomplete="off"/>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-centered">
			<label>E-mail </label>
			<input id="b1" class='form-control' type='email' name='correo2' placeholder='E-mail' autocomplete="off" />
		</div>
		<div class="col-sm-3 col-centered">
			<label><?php echo $lang['Fecha-Nac']; ?>:</label>
			<input id="b4" class='form-control' type='date' name="fechanac2" autocomplete="off"/>
		</div>
		<div class="col-sm-3 col-centered">
		<label><?php echo $lang['Tipous'] ?>: </label>
			<select id="b6" class="form-control" name="tiposu">
				<option value="0"><?php echo $lang['Nada'] ?></option>
				<option value="1"><?php echo $lang['Admin'] ?></option>
				<option value="2"><?php echo $lang['Cliente'] ?> </option>
				<option value="3"><?php echo $lang['Perito'] ?> </option>
				<option value="4"><?php echo $lang['Agente'] ?> </option>
			</select>
		</div>
	</div>
    <div class="row">
		<div class="col-sm-4 col-centered">
		<br>
		<label><?php echo $lang['Contra-reset']; ?>: </label>
			<input id="b5" type='checkbox' class="checkbox-inline" name='contraprevia' placeholder='<?php echo $lang['Contra-nueva']; ?>' autocomplete="off"/>
		</div>
		
	</div>
	<br>
	<div class="col-sm-6 col-centered">
	
		<a id="adminmodificar" class='btn btn-primary btn-block'><?php echo $lang['Modificar-Usuario'] ?></a>
		</div>
<hr><div id="resultmodiadmin"></div>


<script type="text/javascript">
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
		contraprevia = $("#b5").val();
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
			}
	});	
});

</script>
</div>  
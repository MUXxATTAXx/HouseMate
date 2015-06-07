<div class='form-Dl' align='center'> 
    
    <form action="#" method="POST">
	<div class="row">
	<label><?php echo $lang['Usuario'] ?>:</label>
		<div class="col-sm-2 col-centered">
            <input id="thestart" class='form-control' onchange="myFunction()">
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
	
		<button class='btn btn-primary btn-block' type='submit' name='registrar2' value="modificar" ><?php echo $lang['Modificar-Usuario'] ?></button>
		</div>
<hr><span class="label label-danger" id="validacion2"></span><span class="label label-danger" id="resultmodiadmin"></span>
<script>
$( "#thestart" ).change(function() {
	 usuario = $("#thestart").html();
		  //ingresar usuario					  
		  $.ajax({
				type: "POST",
				url: "Call/Funciones/checkmodificar.php",
				data: "usuario="+usuario,
				dataType: "html",
				beforeSend: function(){
					  //imagen de carga
					  $("#spanme").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
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
</script>

        </div>  

	</form> 

<form  action='crear_cliente.php' method='POST' name='registrar'>
<div class='form-Dl' align="center">
	<div class="row row-centered">
		<div class="col-sm-6 col-centered">    
			<label><?php echo($lang['Nombre']); ?>:</label>
			<input onkeypress="return letras(event)" class="form-control"maxlength="20" type="text" autocomplete="off" id="nombre" placeholder="<?php echo($lang['Nombre']); ?>" />
		</div>
		<div class="col-sm-6 col-centered">    
			<label><?php echo($lang['Apellido']); ?>:</label>
			<input onkeypress="return letras(event)" class="form-control"maxlength="20" type="text" autocomplete="off" id="apellido" placeholder="<?php echo($lang['Apellido']); ?>" />
		</div>
	</div>
	<div class="row row-centered">
		<div class="col-sm-8 col-centered">  
			<label><?php echo($lang['Usuarioname']);?>:</label>
			<input class="form-control" maxlength="20" id="user" autocomplete="off" placeholder="<?php echo($lang['Usuarioname']); ?>" />
		</div>
		<div class="col-sm-4 col-centered">  
			<label><?php echo $lang['Tipous'] ?>:</label>
			<select class="form-control" id="tiposu">
				<option value="0"><?php echo $lang['Nada'] ?></option>
				<option value="2"><?php echo $lang['Cliente'] ?> </option>
				<option value="3"><?php echo $lang['Perito'] ?> </option>
				<option value="4"><?php echo $lang['Agente'] ?> </option>
			</select>
		</div>
	</div>
	<div class="row row-centered">
		<div class="col-sm-8 col-centered">   
			<label><?php echo($lang['Correo']); ?>:</label>
			<input id="lowerme" class="form-control"maxlength="30" type="email" autocomplete="off" placeholder="<?php echo($lang['Correos']); ?>" />
		</div>
		<div class="col-sm-4 col-centered">   
			<label><?php echo($lang['Fecha-Nac']); ?>:</label>
			<input class="form-control" type="date" id="fechanac" placeholder="fecha nacimiento" max="1997-01-01"/>
		</div>
	</div>
	<div class="row row-centered">
		<div class="col-sm-6 col-centered">
			<label><?php echo($lang['Contra']); ?>:</label>
			<input class="form-control"maxlength="20" type="password" autocomplete="off" id="contra" placeholder="<?php echo($lang['Contra']); ?>" />
		</div>
		<div class="col-sm-6 col-centered">
			<label><?php echo($lang['Confirmar']); ?>:</label>
			<input class="form-control"maxlength="20" type="password" autocomplete="off" id="contra2" placeholder="<?php echo($lang['Confirmar']); ?>" />
		</div>
	</div>
	
   <br>
<<<<<<< HEAD
   <div class="col-sm-6 col-centered">
    <button class="btn btn-primary btn-block" id="ingresarstuff"><?php echo($lang['Crear-Cuenta']); ?></button>
	<p id="resultado"></p>
	</div>
=======
    <div class="col-sm-6 col-centered">
        <button class="btn btn-primary btn-block" type="submit" name="registrar"><?php echo($lang['Crear-Cuenta']); ?></button>
    </div>
<hr>
>>>>>>> origin/master
</form>
<br><span class="label label-danger" id="validacion1"></span>
</div>
<script>                                                      
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
					  $("#resultado").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
				},
				error: function(){
					  alert("error petición ajax");
				},
				success: function(data){                                                    
					  $("#resultado").empty();
					  $("#resultado").append(data);
														 
						}
				  });
																					  
																			   
			});
																	   
		</script>



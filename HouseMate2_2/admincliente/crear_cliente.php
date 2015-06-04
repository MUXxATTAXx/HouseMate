
<div name='registrar'>
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
	   <div class="row row-centered">
			<div class="col-sm-6 col-centered">
			<button class="btn btn-primary btn-block" id="ingresarstuff"><?php echo($lang['Crear-Cuenta']); ?></button>
			</div>
		</div>
		<br><span id="resultadoinsert"></span><span class="label label-danger" id="validacion1"></span>
</div>



</div>




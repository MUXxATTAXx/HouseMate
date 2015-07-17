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
				<input onkeypress="return letras(event)" id="b2" class='form-control 'onkeypress="return letras(event)";  maxlength='20' type='text' name='nombre2' placeholder='<?php echo $lang['Nombre']; ?>' autocomplete="off"/>
		</div>
		<div class="col-sm-6 col-centered">
			<label><?php echo $lang['Apellido'];?>: </label>
				<input onkeypress="return letras(event)" id="b3" class='form-control' onkeypress="return letras(event)"; maxlength='20' type='text' name='apellido2' placeholder='<?php echo $lang['Apellido']?>' autocomplete="off"/>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-centered">
			<label>E-mail </label>
			<input id="b1" class='form-control' type='email' name='correo2' placeholder='E-mail' onkeypress="checkEmail();return correo(event)" autocomplete="off" />
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
				<option value="2"><?php echo $lang['Agente'] ?> </option>
				<option value="3"><?php echo $lang['Perito'] ?> </option>
				<option value="4"><?php echo $lang['Cliente'] ?> </option>
			</select>
		</div>
	</div>
    <div class="row">
		<div class="col-sm-4 col-centered">
		<br>
		<label><?php echo $lang['Contra-reset']; ?>: </label>
			<input id="b5" type='checkbox' class="checkbox-inline" value="marcado" name='contraprevia' placeholder='<?php echo $lang['Contra-nueva']; ?>' autocomplete="off"/>
		</div>

	</div>
	<br>
	<div class="col-sm-6 col-centered">

		<a id="adminmodificar" class='btn btn-primary btn-block' href="#me2"><?php echo $lang['Modificar-Usuario'] ?></a>
		</div>
<hr><div id="resultmodiadmin"></div>


</div>

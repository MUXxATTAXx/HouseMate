
<div name='registrar'>
	<div class="row row-centered">
		<div class="col-sm-6 col-centered">
			<label><?php echo($lang['Nombre']); ?>:</label>
			<input onkeypress="return letras(event)" class="form-control"maxlength="20" type="text" autocomplete="off" id="nombre" placeholder="<?php echo($lang['Nombre']); ?>" required/>
		</div>
		<div class="col-sm-6 col-centered">
			<label><?php echo($lang['Apellido']); ?>:</label>
			<input onkeypress="return letras(event)" class="form-control"maxlength="20" type="text" autocomplete="off" id="apellido" placeholder="<?php echo($lang['Apellido']); ?>" required/>
		</div>
	</div>
	<div class="row row-centered">
		<div class="col-sm-8 col-centered">
			<label><?php echo($lang['Usuarioname']);?>:</label>
			<input class="form-control" maxlength="20" id="user" autocomplete="off" placeholder="<?php echo($lang['Usuarioname']); ?>" required/>
		</div>
		<div class="col-sm-4 col-centered">
			<input type="hidden" value="4" id="tiposu" name="tiposu">
		</div>
	</div>
	<div class="row row-centered">
		<div class="col-sm-8 col-centered">
			<label><?php echo($lang['Correo']); ?>:</label>
			<input onfocus="checkEmail()" onblur="checkEmail();return false;" onchange ="checkEmail()return false;" id="lowerme" class="form-control"maxlength="30" type="email" autocomplete="off" placeholder="<?php echo($lang['Correos']); ?>" required/>
		</div>
		<div class="col-sm-4 col-centered">
			<label><?php echo($lang['Fecha-Nac']); ?>:</label>
			<input class="form-control" type="date" id="fechanac" placeholder="fecha nacimiento" max="1997-01-01" required/>
		</div>
	</div>
	<div class="row row-centered">
		<div class="col-sm-6 col-centered">
			<label><?php echo($lang['Contra']); ?>:</label>
			<input  onkeyup="password(); return false;" class="form-control"maxlength="20" type="password" autocomplete="off" id="contra" placeholder="<?php echo($lang['Contra']); ?>" required/>
		</div>
		<div class="col-sm-6 col-centered">
			<label><?php echo($lang['Confirmar']); ?>:</label>
			<input onkeyup="password(); return false;" class="form-control"maxlength="20" type="password" autocomplete="off" id="contra2" placeholder="<?php echo($lang['Confirmar']); ?>" required/>
		</div>
	</div>

   <br>
	   <div class="row row-centered">
			<div class="col-sm-6 col-centered">
			<button onclick="checkEmail();" class="btn btn-primary btn-block" id="ingresarstuff"><?php echo($lang['Crear-Cuenta']); ?></button>
			</div>
		</div>
		<br><center><span onload="return false;" id="resultadoinsert"></span><span class="label label-danger" id="validacion1"></span></center>
    <center><span class="label label-warning" id="contra-error"></span></center>
     <center><span class="label label-warning" id="email-error"></span></center>
<br>
</div>
<script>
  function checkEmail() {
    var email = document.getElementById('lowerme');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email.value)) {
	    var mensaje = document.getElementById('email-error');
			mensaje.innerHTML = "E-mail error!"
	    email.focus;
	    return false;
 		}else{
     mensaje.innerHTML = ""
 		}
}
function password(){
    var pass1 = document.getElementById('contra');
    var pass2 = document.getElementById('contra2');
    var message = document.getElementById('contra-error');
     if(pass1.value == pass2.value){

        message.innerHTML = "Passwords Match!"
        message.className = "label label-success"
    }else{
        message.innerHTML = "Passwords Do Not Match!"
        message.className = "label label-warning"
    }
    if(pass2.value == ""){
        message.innerHTML = ""
    }
}
</script>

<form method="post" enctype="multipart/form-data">
<div name='registrar'>
<div class='form-Dl' align="center">
	<div class="panel-heading">
            <div class="row"> 
				<div class="col-sm-2"></div><div class="col-sm-8"><h3 class="panel-title label label-primary"><?php echo $lang['EmpresaN'] ?></h3></div><div class="col-sm-2"></div> 
			</div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4 col-lg-4 " align="center"> 
					<div class="row">
						<div class="form-group col-xs-12">
							<img class="img-responsive imagenpequeña" id="imagenempresa" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"> 
						</div>
						<div class="form-group col-xs-12">
							<div class="btn btn-primary btn-file">
								<i class="glyphicon glyphicon-folder-open"></i><?php echo $lang['Buscar3'] ?>
								<input type="file" class="file" onchange="readURL(this)" name="file" >
							</div>
						</div>
					</div>
				</div>
                <div class=" col-md-8 col-lg-8 ">
					<div class="row">
						<div class="form-group col-xs-6">
							<label>*<?php echo $lang['Nombre'] ?>:</label>
							<input name="nombre" class="form-control" maxlength="30">
						</div>
						<div class="form-group col-xs-6">
							<label>*NIT:</label>
							<input name="nit" class="form-control" maxlength="14">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-xs-6">
							<label>*<?php echo $lang['tel'] ?>:</label>
							<input name="telefono" class="form-control" maxlength="8">
						</div>
						<div class="form-group col-xs-6">
							<label><?php echo $lang['tel2'] ?>:</label>
							<input name="telefono2" class="form-control" maxlength="8">
						</div>
					</div>
					<div>
						<?php include "Call/Funciones/select3.php"; ?>
					</div>
					<div class="row">
						<div class="form-group col-xs-12">
							<label><?php echo $lang['Descripcion'] ?>:</label>
							<textarea name="descripcion" class="form-control" maxlength="140"></textarea>
						</div>
						
					</div>
                </div>
              </div><br>
				<center><button name="ingresar" type="submit" class="btn btn-primary extraright"><?php echo($lang['insert'])?></button>
					
					<br>
					<?php	
						include "Call/Empresa/Empresafuncion/crearempresa.php";
					?>
				</center>	
			 </div>
</div>
</div>
<script>
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
</form>



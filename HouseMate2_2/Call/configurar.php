
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4 col-lg-4 " align="center"> 
					<div class="row">
						<div class="form-group col-xs-12">
							<img class="img-responsive imagenpequeña" id="imagenempresa" 
							src="<?php $filename = "img/Empresas/".$row['imagen'];	
								if(file_exists($filename))
								{
									$hayimagen = "img/Empresas/".$row['imagen'];
									$tempnamefalse = $row['imagen'];
									echo "img/Empresas/".$row['imagen']; 
								}
								else
								{
									$hayimagen = "";
									echo "https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100";
								}?>"> 
							
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
							<input name="nombre" class="form-control" value="<?php echo $row['nombre'] ?>" maxlength="30">
						</div>
						<div class="form-group col-xs-6">
							<label>*NIT:</label>
							<input name="nit" class="form-control" maxlength="14"  value="<?php echo $row['nit'] ?>">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-xs-6">
							<label>*<?php echo $lang['tel'] ?>:</label>
							<input name="telefono" class="form-control"  maxlength="8" value="<?php echo $row['telefono'] ?>">
						</div>
						<div class="form-group col-xs-6">
							<label><?php echo $lang['tel2'] ?>:</label>
							<input name="telefono2" class="form-control" maxlength="8" value="<?php echo $row['telefono2'] ?>">
						</div> 
					</div>
					<div>
						<?php include "Call/Funciones/select3.php"; 
						$casa = explode(", ", $row['direccion']);
						echo "<script type='text/javascript'>
						$('#Departamento3').val('".$casa[1]."');
						$('#Municipio3').val('".$casa[0]."');
						</script>";
						?>
					</div>
					<br>
					<div class="row">
						<div class="form-group col-xs-4">
							<label><?php echo $lang['Descripcion'] ?>:</label>
						</div>
						<div class="form-group col-xs-8">
							<textarea name="descripcion" class="form-control" maxlength="260" rows="3"><?php echo $row['descrip'] ?></textarea>
						</div>
					</div>
                </div>
              </div>
            </div>
				 <center>
					<button name="modificar" type="submit" class="btn btn-primary extraright"><?php echo($lang['insert'])?></button>
					<br>
					<?php	
						include "Call/Empresa/Empresafuncion/modificar.php";
					?>
				</center>	

 <script type="text/javascript" src="js/jquery.chained.js" charset="utf-8"></script>

 <script>
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagenempresa')
                    .attr('src', e.target.result)
            };
			
            reader.readAsDataURL(input.files[0]);
        }
    }
  $(function() {
$("#Municipio3").chained("#Departamento3");
});
</script>
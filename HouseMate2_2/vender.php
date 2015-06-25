			<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/change.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.11.1.min.js" ></script>
   <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" ></script>
<?php
    echo("
<meta charset=utf-8 />
    ");
	session_start();
	$variable1 = $_SESSION["user"]; 
	$variable2 = $_SESSION['id']; 
	$variable3 = $_SESSION['tip'];
	switch($variable3)
	{
		case 1:
		include("Header/barranav2.php");
		break;
		case 2:
		break;
		case 3:
        include("Header/barranav3.php");
		break;
		case 4:
		include("Header/barranav6.php");
		break;
	}
    

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo($lang['Perfil']);?></title>
	<meta charset = "utf-8" />
</head>
<body> 
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.chained.min.js"></script>
<form method="POST" method="GET" enctype="multipart/form-data">
    <div class='form-Dl' align="center">

 <div class="center">
					<h3><?php echo $lang['Informacion'] ?>:</h3>
			</div>
<div class="row row-centered">
	<div class="form-group col-xs-3">
		<label><?php echo $lang['vr'] ?>:</label>
			<select name="selector" class='form-control whitecover'>
				<option value="0"><?php echo $lang['Nada'] ?></option>
				<option value="1"><?php echo $lang['Venta']?></option>
				<option value="2"><?php echo $lang['Renta']?></option>
			</select>
	</div>
	<div class="form-group col-xs-3">
			  <label><?php echo $lang['tm'] ?>:</label>
			</span><select name="selector2" class='form-control whitecover'>
				<option value="0"><?php echo $lang['Nada'] ?></option>
				<option value="1"><?php echo $lang['Rustico']?></option>
				<option value="2"><?php echo $lang['Urbana']?></option>
			</select>
	</div>
	<div class="form-group col-xs-6">
		<label><?php echo $lang['Precio']?>:</label>
		<div class="input-group">
			 <span class="input-group-addon">$</span>
			 <input onkeypress="return num(event)" type="number" class='form-control' min="0" step="1" name="precio" placeholder='<?php echo $lang['Precio']?>'>
			 <span class="input-group-addon">.00</span>
		  </div>
	</div>
</div>
<div class="row row-centered">
	<center>
		<?php require ("Call/Funciones/select.php") ?>
	</center>
</div>
<div class="row row-centered">
    <center>
		<div class="form-group col-xs-6">
		<label><?php echo $lang['Direccion'] ?>:</label>
			<textarea rows="2" class='form-control' type='text' name='dirrecion'  placeholder='<?php echo $lang['Direccion'] ?>'></textarea>
	</div>
    </center>
	<center>
		<div class="form-group col-xs-6">
		<label><?php echo $lang['Descripcion'] ?>:</label>
	<textarea rows="2" class='form-control' type='text' name='descrip' placeholder='<?php echo $lang['Descripcion'] ?>'></textarea>
	</div>
	</center>
</div>
	<label><?php echo $lang['Imagen']  ?>:</label>
	<div  class="onlyme">
	<label>
	<?php echo $lang['selectp']; ?>
<input id="imagenfea" class='form-control imagenfea' type='file' name='imagen' onchange="readURL(this);"/>
	</label>

	</div >
	<br>
	<img id="blah" class="img-responsive" alt="Responsive image" src="#" alt="<?php echo $lang['Imagese'] ?>" />
	<br>

	<br>
	
    <div class="center">
					<h3><?php echo $lang['Etiqueta'] ?>: </h3><span class="label label-danger" id="validacion-num1"></span>
			</div>
	
	<div class="center">
		<div class="row row-centered">
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Cuartos'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons1" id="fancy-checkbox-success-custom-icons1" autocomplete="off" value="1" />
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons1" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input id="tag1" onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ] " name="a1" type="number" maxlength="2"  min="0" max="10" placeholder='<?php echo $lang['Cuartos']?>'>
						</div>
				</div>
			</div>
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Terraza'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons2" id="fancy-checkbox-success-custom-icons2" autocomplete="off" value="1"/>
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons2" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input id="tag2" onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="a2" type="number"  min="0" max="10" placeholder='<?php echo $lang['Terraza'] ?>' >
				   
					</div>
				</div>
			</div>
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Cocinas'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons3" id="fancy-checkbox-success-custom-icons3" autocomplete="off" value="1"/>
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons3" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input id="tag3" onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="a3" type="number" min="0" max="10" placeholder='<?php echo $lang['Cocinas'] ?>'>
				   
					</div>
				</div>
			</div>
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Piscinas'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons4" id="fancy-checkbox-success-custom-icons4" autocomplete="off" value="1"/>
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons4" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input id="tag4" onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="a4" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Piscinas'] ?>'>
				   
					</div>
				</div>
			</div>
		</div>
		<div class="row row-centered">
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Jardines'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons5" id="fancy-checkbox-success-custom-icons5" autocomplete="off" value="1"/>
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons5" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input id="tag5" onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]"name="a5" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Jardines'] ?>'>
					</div>
				</div>
			</div>
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Comedores'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons6" id="fancy-checkbox-success-custom-icons6" autocomplete="off" value="1"/>
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons6" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input id="tag6" onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]"  name="a6" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Comedores'] ?>'>
					</div>
				</div>
			</div>
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Cocheras'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons7" id="fancy-checkbox-success-custom-icons7" autocomplete="off" value="1"/>
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons7" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input id="tag7" onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="a7" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Cocheras'] ?>'>
					</div>
				</div>
			</div>
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Salas'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons8" id="fancy-checkbox-success-custom-icons8" autocomplete="off" value="1"/>
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons8" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input id="tag8"  onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="a8" type="number" min="0"  max="10" class="form-control" placeholder='<?php echo $lang['Salas'] ?>'>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-centered">
			<div class="form-group col-xs-3">
			<span>
			</div>
			<div class="form-group col-xs-3">
					<div class="[ form-group ]">
						<label><?php echo $lang['Sotanos'] ?>:</label>
							<br>
						<input type="checkbox" name="fancy-checkbox-success-custom-icons9" id="fancy-checkbox-success-custom-icons9" autocomplete="off" value="1"/>
						<div class="[ btn-group ]">
							<label for="fancy-checkbox-success-custom-icons9" class="[ btn btn-success ]">
								<span class="[ glyphicon glyphicon-ok ]"></span>
								<span class="[ glyphicon glyphicon-minus ]"></span>
							</label>
							<input id="tag9" onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="a9" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Sotanos'] ?>'>
						</div>
					</div>
				</div>
			<div class="form-group col-xs-3">
					<div class="[ form-group ]">
						<label><?php echo $lang['Baños'] ?>:</label>
							<br>
						<input type="checkbox" name="fancy-checkbox-success-custom-icons10" id="fancy-checkbox-success-custom-icons10" autocomplete="off" value="1"/>
						<div class="[ btn-group ]">
							<label for="fancy-checkbox-success-custom-icons10" class="[ btn btn-success ]">
								<span class="[ glyphicon glyphicon-ok ]"></span>
								<span class="[ glyphicon glyphicon-minus ]"></span>
							</label>
							<input id="tag10" onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="a10" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Baños'] ?>'>
						</div>
					</div>
				</div>

		</div>

</div>
<br>
	 <div class="col-sm-6 col-centered">
    <button class='btn btn-primary btn-block' type='submit' name='boto' value="Insert"><?php echo $lang['insert']?></button>
	</div>
     	</div>   
			<script>
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
            };
			
            reader.readAsDataURL(input.files[0]);
        }
    }
	</script>
	<?php
		require('Call/Funciones/ingresarin.php');	
	?>

    
</form>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
  <script src="js/jquery.chained.js?v=1.0.0" type="text/javascript" charset="utf-8"></script>
  <script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
  <script src="js/bootstrap-table.js" ></script>

<script src="js/validaciones.js" type="text/javascript" ></script>
</body>
</html>

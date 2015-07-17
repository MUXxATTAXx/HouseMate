<?php
	include("../../conexion.php");
	include("../Lenguaje/lenguaje.php");
?>

			<!-- barra lateral -->
			<!-- modificar falta -->
 <div class='form-Dl' align="center">
 <div class="boxleft "><a href="#me2" class=" glyphicon glyphicon-arrow-left" onclick='regresar(this.id)'>></a></div>
           <div class="center">
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
		<?php require ("../../Call/Funciones/select2.php") ?>
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
			<div class="row row-centered">
				<div class="form-group col-xs-12">
					<label><?php echo $lang['Imagen']  ?>:</label>
					<div  class="onlyme">
						<label>
							<?php echo $lang['selectp']; ?>
							<input id="imagenfea2" class='form-control imagenfea' type='file' name='imagena' onchange="readURL2(this);"/>
						</label>
					</div>
				</div>
					<br>
					<img id="blah2" class="img-responsive" alt="Responsive image" src="#" alt="<?php echo $lang['Imagese'] ?>" />
					<br>
					<br>

			</div>

				<h3><?php echo $lang['Etiqueta'] ?>:</h3>
					<div class="center">
		<div class="row row-centered">
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Cuartos'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons11" id="fancy-checkbox-success-custom-icons11" autocomplete="off" />
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons11" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ] " name="b1" type="number"  min="0" max="10" placeholder='<?php echo $lang['Cuartos']?>'>

						</div>
				</div>
			</div>
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Terraza'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons12" id="fancy-checkbox-success-custom-icons12" autocomplete="off" />
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons12" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b2" type="number"  min="0" max="10" placeholder='<?php echo $lang['Terraza'] ?>' >

					</div>
				</div>
			</div>
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Cocinas'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons13" id="fancy-checkbox-success-custom-icons13" autocomplete="off" />
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons13" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b3" type="number" min="0" max="10" placeholder='<?php echo $lang['Cocinas'] ?>'>

					</div>
				</div>
			</div>
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Piscinas'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons14" id="fancy-checkbox-success-custom-icons14" autocomplete="off" />
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons14" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b4" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Piscinas'] ?>'>

					</div>
				</div>
			</div>
		</div>
		<div class="row row-centered">
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Jardines'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons15" id="fancy-checkbox-success-custom-icons15" autocomplete="off" />
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons15" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]"name="b5" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Jardines'] ?>'>
					</div>
				</div>
			</div>
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Comedores'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons16" id="fancy-checkbox-success-custom-icons16" autocomplete="off" />
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons16" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]"  name="b6" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Comedores'] ?>'>
					</div>
				</div>
			</div>
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Cocheras'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons17" id="fancy-checkbox-success-custom-icons17" autocomplete="off" />
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons17" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b7" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Cocheras'] ?>'>
					</div>
				</div>
			</div>
			<div class="form-group col-xs-3">
				<div class="[ form-group ]">
					<label><?php echo $lang['Salas'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-success-custom-icons18" id="fancy-checkbox-success-custom-icons18" autocomplete="off" />
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-success-custom-icons18" class="[ btn btn-success ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b8" type="number" min="0"  max="10" class="form-control" placeholder='<?php echo $lang['Salas'] ?>'>
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
						<input type="checkbox" name="fancy-checkbox-success-custom-icons19" id="fancy-checkbox-success-custom-icons19" autocomplete="off" />
						<div class="[ btn-group ]">
							<label for="fancy-checkbox-success-custom-icons19" class="[ btn btn-success ]">
								<span class="[ glyphicon glyphicon-ok ]"></span>
								<span class="[ glyphicon glyphicon-minus ]"></span>
							</label>
							<input onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b9" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Sotanos'] ?>'>
						</div>
					</div>
				</div>
			<div class="form-group col-xs-3">
					<div class="[ form-group ]">
						<label><?php echo $lang['Baños'] ?>:</label>
							<br>
						<input type="checkbox" name="fancy-checkbox-success-custom-icons20" id="fancy-checkbox-success-custom-icons20" autocomplete="off" />
						<div class="[ btn-group ]">
							<label for="fancy-checkbox-success-custom-icons20" class="[ btn btn-success ]">
								<span class="[ glyphicon glyphicon-ok ]"></span>
								<span class="[ glyphicon glyphicon-minus ]"></span>
							</label>
							<input onkeypress="return num(event)" for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b10" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Baños'] ?>'>
						</div>
					</div>
				</div>
		</div>
		<br>
		<div class="row row-centered">
					<div class="form-group col-xs-6 col-centered">
						<button class='btn btn-primary btn-block' type='submit' name='boto' value="Insert"><?php echo $lang['insert']?></button>
					</div>
				</div>
			</div>
		</div>
		<br>
</div>
<script>  $(function() {
});
	function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

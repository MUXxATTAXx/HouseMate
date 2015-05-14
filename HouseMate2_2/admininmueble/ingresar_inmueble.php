<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.chained.min.js"></script>
<div class='form-Dl' align="center">

 <div class="center">
					<h3><?php echo $lang['Informacion'] ?>:</h3>
			</div>
	<div class="row row-centered">
<div class="form-group col-xs-6">
    <label><?php echo $lang['vr'] ?> </label>
		<select name="selector" class='form-control whitecover'>
			<option value="0"><?php echo $lang['Nada'] ?></option>
			<option value="1"><?php echo $lang['Venta']?></option>
			<option value="2"><?php echo $lang['Renta']?></option>
		</select>
		</div>
<div class="form-group col-xs-6">
		  <label><?php echo $lang['tm'] ?> </label>
		</span><select name="selector2" class='form-control whitecover'>
			<option value="0"><?php echo $lang['Nada'] ?></option>
			<option value="1"><?php echo $lang['Rustico']?></option>
			<option value="2"><?php echo $lang['Urbana']?></option>
		</select>
		</div>
</div>
<div class="row row-centered">
<div class="form-group col-xs-6">
	<label><?php echo $lang['Precio']?>:</label>
	<div class="input-group">
         <span class="input-group-addon">$</span>
         <input type="number" class='form-control' min="0" step="1" name="precio" placeholder='<?php echo $lang['Precio']?>'>
         <span class="input-group-addon">.00</span>
      </div>
    
	</div>
		<div class="form-group col-xs-6">
		<label><?php echo $lang['Descripcion'] ?>:</label>
	<textarea rows="1" class='form-control' type='text' name='descrip' placeholder='<?php echo $lang['Descripcion'] ?>'></textarea>
	</div>
</div>
<div class="row row-centered">
	<center>
		<?php require ("Call/Funciones/select.php") ?>
	</center>
</div>
<div class="row row-centered">
	<center>
		<div class="form-group col-xs-12">
		<label><?php echo $lang['Direccion'] ?>: </label>
			<textarea rows="1" class='form-control' type='text' name='dirrecion'  placeholder='<?php echo $lang['Direccion'] ?>'></textarea>
	</div>
</center>
</div>
	<label><?php echo $lang['Imagen']  ?>:</label>
	<div  class="onlyme">
	<label>
	<?php echo $lang['selectp']; ?>
<input id="imagenfea" class='form-control' type='file' name='imagen' onchange="readURL(this);"/>
	</label>

	</div >
	<br>
	<img id="blah" class="img-responsive" alt="Responsive image" src="#" alt="<?php echo $lang['Imagese'] ?>" />
	<br>
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
	<br>
	
    <div class="center">
					<h3><?php echo $lang['Etiqueta'] ?>:</h3>
			</div>
	
	<div class="center">
	<div class="row row-centered">
	<div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-success-custom-icons" id="fancy-checkbox-success-custom-icons" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-success-custom-icons" class="[ btn btn-success ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span class="[ glyphicon glyphicon-minus ]"></span>
                </label>
				
                <label for="fancy-checkbox-success-custom-icons" class="[ btn btn-default active ]">
                    Cocina
                </label>
            </div>
    </div>
            <div class="form-group col-xs-2 col-centered">
	<label><?php echo $lang['Cuartos'] ?>:</label><input name="a1" type="number" min="0" max="15" class="form-control"  placeholder='<?php echo $lang['Cuartos'] ?>'>
		</div>
		<div class="form-group col-xs-2 col-centered">
		<label><?php echo $lang['Terraza'] ?>:</label><input name="a2" type="number" min="0" max="15" class="form-control" placeholder='<?php echo $lang['Terraza'] ?>'>
		</div>
		<div class="form-group col-xs-2 col-centered">
		<label><?php echo $lang['Cocinas'] ?>:</label><input name="a3" type="number" min="0" max="15" class="form-control" placeholder='<?php echo $lang['Cocinas'] ?>'>
		</div>
		<div class="form-group col-xs-2 col-centered">
			<label><?php echo $lang['Piscinas'] ?>:</label><input name="a4" type="number" min="0" max="15" class="form-control" placeholder='<?php echo $lang['Piscinas'] ?>'>
		</div>
		<div class="form-group col-xs-2 col-centered">
			<label><?php echo $lang['Jardines'] ?>:</label><input name="a5" type="number" min="0" max="15" class="form-control" placeholder='<?php echo $lang['Jardines'] ?>'>
		</div>
	</div>
	<div class="row row-centered">
	<div class="form-group col-xs-2 col-centered">
		<label><?php echo $lang['Comedores'] ?>:</label><input name="a6" type="number" min="0" max="15"  class="form-control" placeholder='<?php echo $lang['Comedores'] ?>'>
	</div>
	<div class="form-group col-xs-2 col-centered">
		<label><?php echo $lang['Cocheras'] ?>:</label><input name="a7" type="number" min="0" max="15" class="form-control" placeholder='<?php echo $lang['Cocheras'] ?>'>
	</div>
	<div class="form-group col-xs-2 col-centered">
		<label><?php echo $lang['Salas'] ?>:</label><input name="a8" type="number" min="0"  max="15" class="form-control" placeholder='<?php echo $lang['Salas'] ?>'>
	</div>
	<div class="form-group col-xs-2 col-centered">
		<label><?php echo $lang['Sotanos'] ?>:</label><input name="a9" type="number" min="0" max="15" class="form-control" placeholder='<?php echo $lang['Sotanos'] ?>'>
	</div>
	<div class="form-group col-xs-2 col-centered">
		<label><?php echo $lang['Baños'] ?>:</label><input name="a10" type="number" min="0" max="15" class="form-control" placeholder='<?php echo $lang['Baños'] ?>'>
	</div>
	</div>
</div>
<br>
	 <div class="col-sm-6 col-centered">
    <button class='btn btn-primary btn-block' type='submit' name='boto' value="Insert"><?php echo $lang['insert']?></button>
	</div>
        
	<?php
		require('Call/Funciones/ingresarin.php');	
	?>
	</div>	

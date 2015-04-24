<div class="row row-centered">
	<div id="barrabusqueda2" class="form-group col-xs-12 col-centered">
			<?php include "Call/Funciones/Select2.php" ?>
	</div>
</div>
			<!-- barra lateral -->
<div class="row row-centered">
	<div class="main">
    <div class="container clearfix">
        <div class="content">
            <section>
                <div class="center">
				<h3><?php echo $lang['Etiqueta'] ?>:</h3>
				<div class="row row-centered">
							<div class="form-group col-xs-2 col-centered">
					<label><?php echo $lang['Cuartos'] ?>:</label><input name="a1"  type="number" min="0" max="15" class="form-control"  placeholder='<?php echo $lang['Cuartos'] ?>'>
						</div>
						<div class="form-group col-xs-2 col-centered">
						<label><?php echo $lang['Terraza'] ?>:</label><input name="a2"  type="number" min="0" max="15" class="form-control" placeholder='<?php echo $lang['Terraza'] ?>'>
						</div>
						<div class="form-group col-xs-2 col-centered">
						<label><?php echo $lang['Cocinas'] ?>:</label><input name="a3"  type="number" min="0" max="15" class="form-control" placeholder='<?php echo $lang['Cocinas'] ?>'>
						</div>
						<div class="form-group col-xs-2 col-centered">
							<label><?php echo $lang['Piscinas'] ?>:</label><input name="a4"  type="number" min="0" max="15" class="form-control" placeholder='<?php echo $lang['Piscinas'] ?>'>
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
			<div class="row row-centered">
				<div id="nece1" class="form-group col-xs-6">
					<label><?php echo $lang['vr'] ?> </label>
						<select name="selector" class='form-control'>
							<option value="0"><?php echo $lang['Nada'] ?></option>
							<option value="1"><?php echo $lang['Venta']?></option>
							<option value="2"><?php echo $lang['Renta']?></option>
						</select>
						</div>
				<div id="nece2" class="form-group col-xs-6">
						  <label><?php echo $lang['tm'] ?> </label>
						</span><select name="selector2" class='form-control'>
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
						 <input id="nece3" type="number" class='form-control' min="0" step="1" name="precio" placeholder='<?php echo $lang['Precio']?>'>
						 <span class="input-group-addon">.00</span>
					  </div>
					
					</div>
						<div class="form-group col-xs-6">
						<label><?php echo $lang['Descripcion'] ?>:</label>
					<textarea id="nece4" rows="3" class='form-control' type='text' name='descrip' placeholder='<?php echo $lang['Descripcion'] ?>'></textarea>
				</div>
			</div>
				
			<div class="row row-centered">
				<div class="form-group col-xs-12">			
					<label><?php echo $lang['Imagen']  ?>:</label>
					<div  class="onlyme">
						<label>
							<?php echo $lang['selectp']; ?>
							<input  id="imagenfea" class='form-control' type='file' name='imagen' onchange="readURL2(this);"/>
						</label>
					</div>
				</div>
					<br>
					<img id="blah2" class="img-responsive" alt="Responsive image" src="#" alt="<?php echo $lang['Imagese'] ?>" />
					<br>
					<br>
				<div class="row row-centered">	
					<div class="form-group col-xs-6 col-centered">
						<button class='btn btn-primary btn-block' type='submit' name='boto' value="Insert"><?php echo $lang['insert']?></button>
					</div>
				</div>
			</div>
		<br>
            </section>
        </div>
        <div class="sidebar">
            <aside>
                <div class="center">
						
						<?php
    mysql_query("SET NAMES 'utf8'");	
    $consulta = "select inmueble.*, tbusuario.nombre, tbusuario.apellido from inmueble  left join tbusuario on inmueble.Dueno = tbusuario.idUsuario WHERE inmueble.IdInmueble > 0";
    $cs=mysql_query($consulta);

	$countermax = 0;
	$i = 0;
	$know = "";
	$know2= "";
	echo "<table id='rowfinder' class='table bg-primary table-hover' data-toggle='table' data-url='/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/' data-search='true' data-show-refresh='true'   data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>
	<thead>
            <tr>
                <th>".$lang['Codigo']."</th>
                <th>".$lang['vr']."</th>
                <th>".$lang['Precio']."</th>
				<th class='hidme'></th>
                <th class='hidme'></th>
                <th class='hidme'></th>
				<th class='hidme'></th>
            </tr>
    </thead><tbody>";
	
	while($row=mysql_fetch_array($cs))
	{
		switch($row['VentaRenta'])
		{
			case 1:
			$know = $lang['Venta'];
			break;
			case 2:
			$know =  $lang['Renta'];
			break;
		}
		switch($row['Tipopropiedad'])
		{
			case 1:
			$know2 = $lang['Rustico'];
			break;
			case 2:
			$know2 =  $lang['Urbana'];
			break;
		}
		echo "<tr>
		<td>".$row['IdInmueble']." </td>
		<td>".$know."</td>
		<td id='t1".$row['IdInmueble']."'>".$know2."</td>
		<td id='t2".$row['IdInmueble']."'>". $row['Precio']."</td>
		<td id='t3".$row['IdInmueble']."'>". $row['Imagen']."</td>
		</tr>";
		
		
	}	
	echo "</tbody></table>";

?>
					</div>
            </aside>
        </div>
    </div><!-- /.containter -->
</div><!-- /.main -->

</div>
<?php echo
"<script type='text/javascript'>
onload = function() 
	{
		var x;
		if (!document.getElementsByTagName || !document.createTextNode) return;
		var rows = document.getElementById('rowfinder').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
		for (i = 0; i < rows.length; i++) {
			var table = document.getElementById('rowfinder');
			rows[i].onclick = function() 
			{
			   
				var row1 = table.rows[this.rowIndex].cells[0].innerHTML;
				var row2 = table.rows[this.rowIndex].cells[1].innerHTML;
				
				var row4 = table.rows[this.rowIndex].cells[3].innerHTML
				var row5 = table.rows[this.rowIndex].cells[4].innerHTML;
				
			  	alert(row2);
			}
        }
		
    }
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
	</script>";
?>
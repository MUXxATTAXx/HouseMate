
			<!-- barra lateral -->
<div class="row row-centered">
	<div class="main">
    <div class="container clearfix">
        <div class="content">
            <section>
           <div class="center">
		    <div class="center">
					<h3><?php echo $lang['Informacion'] ?>:</h3>
			</div>
		   <div class="row row-centered">
				<div id="nece1" class="form-group col-xs-4">
					<label><?php echo $lang['vr'] ?> </label>
						<select id="selecta" name="selectora" class='form-control'>
							<option value="0"><?php echo $lang['Nada'] ?></option>
							<option value="1"><?php echo $lang['Venta']?></option>
							<option value="2"><?php echo $lang['Renta']?></option>
						</select>
						</div>
				<div id="nece2" class="form-group col-xs-4">
						  <label><?php echo $lang['tm'] ?> </label>
						</span><select id="selecta2" name="selectora2" class='form-control'>
							<option value="0"><?php echo $lang['Nada'] ?></option>
							<option value="1"><?php echo $lang['Rustico']?></option>
							<option value="2"><?php echo $lang['Urbana']?></option>
						</select>
				</div>
				<div class="form-group col-xs-4">
					<label><?php echo $lang['Precio']?>:</label>
					<div class="input-group">
						 <span class="input-group-addon">$</span>
						 <input id="modinece" type="number" class='form-control' min="0" step="1" name="precioa" placeholder='<?php echo $lang['Precio']?>'>
						 <span class="input-group-addon">.00</span>
					  </div>
					
				</div>
			</div>
			<div class="row row-centered">
				<center>
				<div class="form-group col-xs-12">
						<label><?php echo $lang['Descripcion'] ?>:</label>
					<textarea id="modidescrip" rows="2" class='form-control' type='text' name='descripa' placeholder='<?php echo $lang['Descripcion'] ?>'></textarea>
				</div>
				</center>
			</div>
			<div class="row row-centered">
				<?php include "Call/Funciones/Select3.php" ?>
			</div>
			<div class="row row-centered">
			<center>
		<div class="form-group col-xs-12">
		<label><?php echo $lang['Direccion'] ?>: </label>
			<textarea rows="2" id="modidirre" class='form-control' type='text' name='dirreciona'  placeholder='<?php echo $lang['Direccion'] ?>'></textarea>
			</div>
		</center>
		</div>
			<div class="row row-centered">
				<div class="form-group col-xs-12">			
					<label><?php echo $lang['Imagen']  ?>:</label>
					<div  class="onlyme">
						<label>
							<?php echo $lang['selectp']; ?>
							<input  id="imagenfea" class='form-control' type='file' name='imagena' onchange="readURL2(this);"/>
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
						<input for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ] " name="b1" type="number"  min="0" max="10" placeholder='<?php echo $lang['Cuartos']?>'>
				   
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
						<input for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b2" type="number"  min="0" max="10" placeholder='<?php echo $lang['Terraza'] ?>' >
				   
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
						<input for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b3" type="number" min="0" max="10" placeholder='<?php echo $lang['Cocinas'] ?>'>
				   
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
						<input for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b4" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Piscinas'] ?>'>
				   
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
						<input for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]"name="b5" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Jardines'] ?>'>
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
						<input for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]"  name="b6" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Comedores'] ?>'>
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
						<input for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b7" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Cocheras'] ?>'>
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
						<input for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b8" type="number" min="0"  max="10" class="form-control" placeholder='<?php echo $lang['Salas'] ?>'>
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
							<input for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b9" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Sotanos'] ?>'>
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
							<input for="fancy-checkbox-success-custom-icons" class="form-control widther [ btn btn-default active ]" name="b10" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Baños'] ?>'>
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
            </section>
			<br>
			<br>
        </div>
        <div class="sidebar">
            <aside>
                <div class="center">
						<div class="center">
					<h3><?php echo $lang['propiedades'] ?>:</h3>
			</div>
						<?php
    mysql_query("SET NAMES 'utf8'");	
    $consulta = "select inmueble.*, tbusuario.nombre, tbusuario.apellido from inmueble  left join tbusuario on inmueble.Dueno = tbusuario.idUsuario WHERE inmueble.IdInmueble > 0";
    $cs=mysql_query($consulta);

	$countermax = 0;
	$i = 0;
	$know = "";
	$know2= "";
	echo "<center><table id='rowfinder' class='table  table-hover table-striped table-striped' data-toggle='table' data-url='/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/' data-search='true' data-show-refresh='true'   data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>
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
	echo "</tbody></table></center>";

?>
					</div>
            </aside>
        </div>
    </div><!-- /.containter -->
</div><!-- /.main -->
<nav class="navbar navbar-default navbar-fixed-bottom">
       <div id="barrabusqueda2" class="form-group col-xs-12 col-centered">
			<?php include "Call/Funciones/Select2.php" ?>
	</div>
   </nav>
</div>

<?php 
echo
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
	</script>";?>
	

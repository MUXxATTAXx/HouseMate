<div class="row">
		<div class="col-sm-2">
			<div id="example_filter" class="dataTables_filter">
				<label>Search:</label>
				<input id="search" type="search" class="form-control input-sm" placeholder="" aria-controls="example">
			</div>
		</div>
</div>
<?php
 include("conexion.php");
    mysql_query("SET NAMES 'utf8'");	
    $consulta = "select inmueble.*, tbusuario.nombre, tbusuario.apellido from inmueble  left join tbusuario on inmueble.Dueno = tbusuario.idUsuario";
    $cs=mysql_query($consulta);

	$countermax = 0;
	$i = 0;
	$know = "";
	$know2= "";
	echo "<table id='example' class='table table-striped table-bordered' cellspacing='0' width='100%'>
	<thead>
            <tr>
                <th>".$lang['Codigo']."</th>
                <th>".$lang['vr']."</th>
                <th>".$lang['Precio']."</th>
                <th>".$lang['Direccion']."</th>
                <th>".$lang['Descripcion']."</th>
                <th>".$lang['Duen']."</th>
				<th>".$lang['tm']."</th>
            </tr>
        </thead>";
	
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
		$i++;
		$smurf = $i / 2;
		
		if($i == 0 || $smurf == 0 )
		{
			echo "<div class='list-group'>";
		}
		echo "<tr>
		<td>
		<p>".$row['IdInmueble']."</p> 
		</td>
		<td>
		<h4>".$know."</h4>
		</td>
		<td >
			
			<p>$".$row['Precio'].".00</p>
		</td>
		<td >
		<p>".$row['Direccion']."</p>
		</td>
		<td>
		<p>".$row['Descripcion']."</p>
		</td>
		<td>
			<p>".$row['nombre']." ".$row['apellido']."</p>
		</td>
		<td 
		<label></label>
			<p>".$know2."</p>
		</td>
		</tr>";
		if($smurf == 0 and $i != 0)
		{
			echo "</div>";
		}
		
	}	
	echo "	
		<tfoot>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
				<th></th>
            </tr>
        </tfoot></table>";

?>
<script type="text/javascript">
var $rows = $('#example tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});</script>
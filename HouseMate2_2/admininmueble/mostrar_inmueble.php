
<?php
  session_start();
    mysql_query("SET NAMES 'utf8'");
    if($_SESSION['tip'] == 1){
    $consulta = "select inmueble.*, tbusuario.nombre, tbusuario.apellido from inmueble  left join tbusuario on inmueble.Dueno = tbusuario.idUsuario WHERE inmueble.IdInmueble > 0";
    }
    else {
      $normi = $_SESSION['id'];
      $consulta = "select inmueble.*, tbusuario.nombre, tbusuario.apellido from inmueble  left join tbusuario on inmueble.Dueno = tbusuario.idUsuario WHERE inmueble.IdInmueble > 0 and tbusuario.idusuario = '$normi'";
    }
  $cs=mysql_query($consulta);
	$countermax = 0;
	$i = 0;
	$know = "";
	$know2= "";
	echo "<table class='table table-striped table-hover' data-toggle='table' data-search='true' data-show-refresh='true'   data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>

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


	}
	echo "</table>";

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


<?php
	session_start();
    include("../../conexion.php");
	include("../Lenguaje/lenguaje.php");
    mysql_query("SET NAMES 'utf8'");	
    $consulta = "select inmueble.*, tbusuario.nombre, tbusuario.apellido from inmueble  left join tbusuario on inmueble.Dueno = tbusuario.idUsuario WHERE inmueble.IdInmueble > 0";
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
				<th>".$lang['edit']."</th>
				<th>".$lang['Eliminares']."</th>
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
		<td>
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
			<p>".$know2."</p>
		</td>
		<td><a onclick='cambiar(this.id)' href='#me3' data-toggle='tab' class='btn btn-warning' id='".$row['IdInmueble']."'><i class='glyphicon glyphicon-edit'></i></a></td>
		<td><a data-toggle='modal' data-target='#delete' onclick='obtener(this.id)' class='btn btn-danger' id='x".$row['IdInmueble']."'><i class='glyphicon glyphicon-remove'></i></a></td></tr>
		</tr>";
	}	
	echo "</table>";

?>
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/change.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet"/>
<div id="delete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title" id="myModalLabel"><?php echo $lang['Cdelete']; ?></h4>
      </div>
      <div class="modal-body">
	  <div class="modal-body">
                <p><?php echo $lang['Xdelete']; ?> </p>
                <p><?php echo $lang['Fdelete']; ?> </p>
                <p class="debug-url"></p>
            </div> 
      </div>
      <div class="modal-footer">
           <button class='btn btn-default' id="deleteuser" data-dismiss="modal"><?php echo($lang['Salir']);?></button>
			
			<a type="button" class="btn btn-default" data-dismiss="modal"><?php echo($lang['Aceptar']); ?></a>
      </div>
    </div>
  </div>
</div>
<span id="spanme">
</span>
	 <script src='js/jquery-1.11.2.min.js' type='text/javascript'></script>
<script src='js/bootstrap-table.js' ></script>
<script src='js/validaciones.js' type='text/javascript' ></script>

<script type="text/javascript">
 $("#deleteuser").click(function(){
								 
	  //obtenemos el texto introducido
	  idre = $("#spanme").html();
	  //ingresar usuario						  
	  $.ajax({
			type: "POST",
			url: "Call/Funciones/borrar_inmueble.php",
			data: "idre="+idre,
			dataType: "html",
			beforeSend: function(){
				  //imagen de carga
				  $("#spanme").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
			},
			error: function(){
				  alert("error petición ajax");
			},
			success: function(data){                                                    
					$("#realornot").empty();
					$("#realornot").append(data);
					loadDataAdmin();							 
					}
			  });															   
		});
	function obtener(yo) {
		document.getElementById('spanme').innerHTML = yo;
}
	function cambiar(yo) {
			var changer = document.getElementById("modificarid");
			changer.innerHTML = yo;
			var d = document.getElementById("sd");
			var e = document.getElementById("crear");
			e.className = "tab-pane fade";
			d.className = "tab-pane fade active in";
}
function regresar() {
			loadDataModificar();
			var d = document.getElementById("crear");
			var e = document.getElementById("sd");
			e.className = "tab-pane fade";
			d.className = "tab-pane fade active in";
}
</script>
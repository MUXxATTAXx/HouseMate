<form>
<div id="delete" class="modalDialog2">
	<div>
		<div  class='form-D2'>
            <a href="#close" title="Close" class="close">X</a>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><?php echo $lang['Cdelete']; ?></h4>
            </div>
            <div class="modal-body">
                <p><?php echo $lang['Xdelete']; ?> </p>
                <p><?php echo $lang['Fdelete']; ?> </p>
                <p class="debug-url"></p>
				<a class='btn btn-default btn-block' id="name" href="#close"><?php echo($lang['Salir']);?></a>
				
				<a type="button" class="btn btn-default btn-block" href="#close"><?php echo($lang['Aceptar']); ?></a>
            </div> 
		</div>
    </div>
</div>
<?php
    include("conexion.php");
    mysql_query("SET NAMES 'utf8'");
    $consulta = "SELECT * FROM tbusuario where idUsuario > '0' ORDER BY `tbusuario`.`idUsuario` ASC";
    //Revisamos que no esten vacios los campos
    $cs=mysql_query($consulta);
	$var = "";
	// data-show-columns='true'
    echo"<form action='#' method='POST'><table id='here' class='table table-striped table-hover' data-toggle='table' data-url='/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/' data-search='true' data-show-refresh='true'   data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>";
        echo"<thead><tr><th>";
		echo $lang['Codigo'];
		echo '</th><th>';
		echo $lang['Nombre'];
		echo "</th><th>";
		echo $lang['Apellido'];
		echo "</th><th>";
		echo $lang['Usuario'];
		echo "</th><th>";
		echo $lang['Correo'];
		echo "</th><th>";
		echo $lang['Fecha-Nac'];
		echo "</th><th>";
		echo $lang['Tipous'];
		echo "</th>";
        echo"<th> Eliminar </th></thead>";
    while($row=mysql_fetch_array($cs)){
		switch($row['tipo'])
		{
			case 1:
			$var = $lang['Admin'];
			break;
			case 2:
			$var = $lang['Agente'];
			break;
			case 3:
			$var = $lang['Perito'];
			break;
			case 4:
			$var = $lang['Cliente'];
			break;
		}
        echo "<tr><td id='a".$row['idUsuario']."'>".$row['idUsuario']."</td><td>".$row['nombre']."</td><td>".$row['apellido']."</td><td>".$row['usuario']."</td><td>".$row['correo']."</td><td>".$row['fechanac']."</td><td>".$var."</td><td>
        <a href='#delete' onclick='obtener(this.id)' class='btn btn-danger' id='x".$row['idUsuario']."'><i class='glyphicon glyphicon-remove'></i></a>
        </td></tr>";
    }
    echo"</table>";
?>
<span id="spanme"></span>
<script>                                                      
		function obtener(yo) {
		document.getElementById('spanme').innerHTML = yo;
}
</script>
<script>                                                      
        //comprobamos si se pulsa una boton
        $("#name").click(function(){
                                     
		  //obtenemos el texto introducido
		  idre = $("#spanme").html();
 
		  //ingresar usuario
																			  
		  $.ajax({
				type: "POST",
				url: "Call/Funciones/admin_eliminar.php",
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
					  $("#spanme").empty();
					  $("#spanme").append(data);
														 
						}
				  });
																					  
																			   
			});
</script>
</form>	




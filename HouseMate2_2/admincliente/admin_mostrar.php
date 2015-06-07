<form>
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
<script type="text/javascript">                                                      
        //comprobamos si se pulsa una boton
        $("#deleteuser").click(function(){
                                     
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
						$("#mesangemostra").empty();
						$("#mesangemostra").append(data);
						loadData();							 
						}
				  });
																				  
																			   
			});

	function loadData(){
    $.ajax({   
     type: 'POST',   
     url: 'Call/Funciones/update.php',   
     data: {LastName:"stuff", FirstName:"stuff"},
    success: function(msg) {
            $("#thetablejq").html(msg);
        },
    });
  };
</script>
<div id="thetablejq">
</div>
                                                  
<?php
/*
    include("conexion.php");
    mysql_query("SET NAMES 'utf8'");
    $consulta = "SELECT * FROM tbusuario where idUsuario > '0' ORDER BY `tbusuario`.`idUsuario` ASC";
    //Revisamos que no esten vacios los campos
    $cs=mysql_query($consulta);
	$var = "";
	// data-show-columns='true'
    echo"<form action='#' method='POST'><table data-toggle='table' data-url='/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/' id='here' class='table table-striped table-hover'  data-search='true' data-show-refresh='true' data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>";
        echo"<thead><tr><th class='hidme'>";
		echo $lang['Codigo'];
		echo '</th><th>';
		echo $lang['Usuario'];
		echo "</th><th>";
		echo $lang['Apellido'];
		echo "</th><th>";
		echo $lang['Nombre'];
		echo "</th><th>";
		echo $lang['Correo'];
		echo "</th><th>";
		echo $lang['Fecha-Nac'];
		echo "</th><th>";
		echo $lang['Tipous'];
		echo "</th>";
        echo"<th>".$lang['edit']."</th>
		<th>".$lang['Eliminares']."</th>
		</thead>";
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
        echo "<tr><td id='a".$row['idUsuario']."'>".$row['idUsuario']."</td><td>".$row['usuario']."</td><td>".$row['nombre']."</td><td>".$row['apellido']."</td><td>".$row['correo']."</td><td>".$row['fechanac']."</td><td>".$var."</td>
		<td><a onclick='cambiar(this.id)' href='#me3' data-toggle='tab' class='btn btn-warning' id='".$row['idUsuario']."'><i class='glyphicon glyphicon-edit'></i></a></td>
		<td><a data-toggle='modal' data-target='#delete' onclick='obtener(this.id)' class='btn btn-danger' id='x".$row['idUsuario']."'><i class='glyphicon glyphicon-remove'></i></a></td></tr>";
    }
    echo"</table>"; */
?>
<span id="spanme"></span>
<script type="text/javascript">
		function obtener(yo) {
		document.getElementById('spanme').innerHTML = yo;
}
	function cambiar(yo) {
			var changer = document.getElementById("thestart");
			var d = document.getElementById("sd");
			var e = document.getElementById("crear");
			changer.value = yo;
			e.className = "tab-pane fade";
			d.className = "tab-pane fade active in";
			
}
</script>

<center><div id="mesangemostra"></div></center>




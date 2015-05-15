
 <div class='form-Dl' align='center'>
    <form action="cliente_mantenimiento.php" method="POST">
	<div class='row row-centered'>
		<div class="col-sm-4 col-centered">            
			<label><?php echo $lang['Codigo'] ?>:</label>
			<a></a>
			<input id='search' class='form-control' name="id3" placeholder='<?php echo $lang['Codigo'] ?>' onkeypress="doSearch()" required autocomplete="off"/>
			<a class='btn btn-primary btn-block' href="#delete"><?php echo $lang['Eliminares'] ?></a>
		</div>
	</div>
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
					<button class='btn btn-default btn-block' type='submit' name='eliminar' ><?php echo($lang['Salir']);?></button>
					 </button><a type="button" class="btn btn-default btn-block" href="#close"><?php echo($lang['Aceptar']); ?></a>
                </div>
                
                
		</div>
	
		</div>
</div>
    </form>
  
 <?php
    mysql_query("SET NAMES 'utf8'");

    if (isset($_POST["eliminar"]) )
    {
    if (isset($_POST['id3']))
        {
			$idt = $_POST['id3'];
            mysql_query("SET NAMES 'utf8'");
			$consulta = "SELECT * FROM tbUsuario WHERE IdUsuario = '$idt' AND idUsuario > 0";
			$cs=mysql_query($consulta);
			$row=mysql_fetch_array($cs);
			$id = $row['idUsuario'];
            $correo = trim($_POST["id3"]);
            $consulta = "DELETE FROM tbUsuario WHERE IdUsuario = '$idt' AND idUsuario <> 0";
            if(mysql_query($consulta))
            {
            echo "<p>Usuario Eliminado</p>";
			$consulta = "UPDATE tbUsuario SET IdUsuario = IdUsuario - 1 WHERE IdUsuario > '$id'";
			$cs=mysql_query($consulta);
			echo "<script> 
			location.replace('cliente_mantenimiento.php?actualstand=4'); 
			</script>";
            }
            else
            {
            echo "<p>Consulta de Eliminar fallo</p>";
            }
        }
    else
    {
        echo"Ingrese el correo del usuario.";
    }
    }

?>
 
	
</div> 

<?php
    mysql_query("SET NAMES 'utf8'");
    $consulta = "SELECT * FROM tbusuario where idUsuario > '0' ORDER BY `tbusuario`.`idUsuario` ASC";
    $cs=mysql_query($consulta);
   echo"<table class='table table-striped table-hover' data-toggle='table' data-url='/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/' data-search='true' data-show-refresh='true'   data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>";
        echo"<thead><tr><th>";
		echo $lang['Codigo'];
		echo '</th><th>';
		echo $lang['Nombre'];
		echo "</th><th>";
		echo $lang['Apellido'];
		echo "</th><th>";
		echo $lang['Correo'];
		echo "</th><th>";
		echo $lang['Fecha-Nac'];
		echo "</th><th>";
		echo $lang['Tipous'];
		echo "</th></thead>";
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
        echo "<tr><td id='a".$row['idUsuario']."'>".$row['idUsuario']."</td><td>".$row['nombre']."</td><td>".$row['apellido']."</td><td>".$row['correo']."</td><td>".$row['fechanac']."</td><td>".$var."</td></tr>";
    }
    echo"</table>";
    ?>

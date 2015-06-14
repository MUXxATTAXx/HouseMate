<div class='form-Dl' align='center'>
	<div class='row row-centered'>
		<div class="col-sm-4 col-centered">            
			<label><?php echo $lang['idm'] ?>:</label>
			<input onkeypress="return num(event)" class='form-control' type='number' name="destruiere" placeholder='<?php echo $lang['Codigo'] ?>' autocomplete="off"/>
			<a class='btn btn-primary btn-block' href="#delete"><?php echo $lang['Eliminares'] ?></a>
			
		</div>
        
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
                    <p><?php echo $lang['Xdelete']; ?></p>
                    <p><?php echo $lang['Fdelete']; ?></p>
                    <p class="debug-url"></p>
					 <button name='eliminar' type="submit" class="btn btn-default btn-block" ><?php echo($lang['Salir']); ?>
					 </button><a type="button" class="btn btn-default btn-block" href="#close"><?php echo($lang['Aceptar']); ?></a>
                </div>
                
                
		</div>
	
		</div>
</div>
    <?php
	    mysql_query("SET NAMES 'utf8'");
		if (isset($_POST['eliminar']))
		{
			$ideli = trim($_POST["eliminar"]);
			mysql_query("SET NAMES 'utf8'");
			$consulta = "SELECT * FROM inmueble WHERE IdInmueble = '$ideli'";
			$cs=mysql_query($consulta);
			$row=mysql_fetch_array($cs);
			if($row > 0)
			{
				$consulta2 = "SELECT * FROM etiqueta WHERE Idinmueble = '$ideli'";
				$numero=mysql_query($consulta2);
				$digito = mysql_num_rows($numero);
				echo $digito;
				
				
				$consulta3 = "DELETE FROM inmueble WHERE IdInmueble = '$ideli'";
				$cs=mysql_query($consulta3);
				
				$consulta4 = "UPDATE etiqueta SET IdEtiqueta = IdEtiqueta - $digito  WHERE Idinmueble > '$ideli'";
				$numero=mysql_query($consulta4);
				
				
				$consulta5 = "UPDATE inmueble SET IdInmueble = IdInmueble - 1  WHERE IdInmueble > '$ideli'";
				$cs=mysql_query($consulta5);
				echo "<script> 
				location.replace('crear_inmueble.php'); 
				</script>";
				
			}
			else
			{
				echo $lang['error4'];
				echo "<script> 
				location.replace('crear_inmueble.php'); 
				</script>";
			}
		}

    

?>	
<?php
	
    $consulta = "select inmueble.*, tbusuario.nombre, tbusuario.apellido from inmueble  left join tbusuario on inmueble.Dueno = tbusuario.idUsuario WHERE inmueble.IdInmueble > 0";
    $cs=mysql_query($consulta);
	$know = "";
	$know2 = "";
    echo"<table class='table table-striped table-hover' data-toggle='table' data-search='true' data-show-refresh='true'   data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>";
        echo"<thead><tr><th>";
		echo $lang['Codigo'];
		echo '</th><th>';
		echo $lang['Duen'];
		echo '</th><th>';
		echo $lang['Direccion'];
		echo "</th><th>";
		echo $lang['vr'];
		echo "</th><th>";
		echo $lang['tm'];
		echo "</th></tr></thead>";
		
    while($row=mysql_fetch_array($cs)){
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
        echo "<tr><td>".$row['IdInmueble']."</td><td>".$row['nombre']." ".$row['apellido']."</td><td>".$row['Direccion']."</td><td>".$know."</td><td>".$know2."</td></tr>";
    }
    echo"</table>";
?>
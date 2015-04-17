<div class='form-Dl' align='center'>
    <form action="cliente_mantenimiento.php" method="POST">
	<div class='row row-centered'>
		<div class="col-sm-4 col-centered">            
			<label><?php echo $lang['Codigo'] ?>:</label>
			<input id='search' class='form-control' name="id3" placeholder='<?php echo $lang['Codigo'] ?>' onkeypress="doSearch()" required autocomplete="off"/>
			<button class='btn btn-primary btn-block' type='submit' name='eliminar' ><?php echo $lang['Eliminares'] ?></button>
		</div>
	</div>
    </form>
  
    <?php
echo("
    <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
    ");
    mysql_query("SET NAMES 'utf8'");

    if (isset($_POST["eliminar"]) )
    {
    include("conexion.php");
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
			$consulta = "UPDATE tbUsuario SET IdUsuario = IdUsuario - 1 WHERE IdUsuario < '$id'";
			$cs=mysql_query($consulta);
			echo "<script> 
			location.replace('cliente_mantenimiento.php'); 
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
 
</div> <?php
    mysql_query("SET NAMES 'utf8'");
    $consulta = "SELECT * FROM tbusuario where idUsuario > '0' ORDER BY `tbusuario`.`idUsuario` ASC";
    $cs=mysql_query($consulta);
   echo"<table id='example' class='table table-striped table-hover table-bordered ' border=1px>";
        echo"<tr><td><b>";
		echo $lang['Codigo'];
		echo '</b></td><td><b>';
		echo $lang['Nombre'];
		echo "</b></td><td><b>";
		echo $lang['Apellido'];
		echo "</b></td><td><b>";
		echo $lang['Correo'];
		echo "</b></td><td><b>";
		echo $lang['Tipous'];
		echo "</b></td>";
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
        echo "<tr ><td class='cd'>".$row['idUsuario']."</td><td>".$row['nombre']."</td><td>".$row['apellido']."</td><td>".$row['correo']."</td><td>".$var."</td></tr>";
    }
    echo"</table>";
    ?>
	<script language="javascript" type="text/javascript">  
    var tf = setFilterGrid("example");  
</script>   

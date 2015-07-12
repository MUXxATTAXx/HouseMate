<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet"/>
<?php
	session_start();
    include("../../../conexion.php");
	include("../../Lenguaje/lenguaje.php");
    mysql_query("SET NAMES 'utf8'");
	$idempresa = $_POST['empresa'];
    $consulta = "SELECT tbusuario.nombre, tbusuario.apellido, tbusuario.correo, tbusuario.usuario, usuario.Rating,usuario.idusuario  FROM usuario inner join tbusuario on usuario.TempId = tbusuario.IdUsuario inner join empresa on usuario.Empresa
	= empresa.IdEmpresa WHERE usuario.idusuario <> empresa.dueño AND Empresa.IdEmpresa ='$idempresa'";
	$queroempresario = "SELECT tbusuario.nombre, tbusuario.apellido, tbusuario.correo, usuario.Rating,tbusuario.usuario, usuario.idusuario FROM usuario inner join tbusuario on usuario.TempId = tbusuario.IdUsuario inner join empresa on usuario.Empresa
	= empresa.IdEmpresa WHERE usuario.idusuario = empresa.dueño AND Empresa.IdEmpresa ='$idempresa'";
    $master = mysql_query($queroempresario);
	$cs=mysql_query($consulta);
	echo "<table class='table table-striped table-hover' data-toggle='table' data-search='true' data-show-refresh='true'   data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>
	<thead>
            <tr>

                <th>".$lang['Nombre']."</th>
				<th>Rating</th>
				<th>".$lang['Perfil']."</th>
				<th>".$lang['mensaje']."</th>
				<th>".$lang['Eliminar']."</th>
            </tr>
    </thead>";
	while($row=mysql_fetch_array($master))
	{
		echo "<tr class='info'>
		<td>
		<p>".$row['nombre']." ".$row['apellido']."</p>
		</td>
		<td>
			<center><p>".$row['Rating']."</p></center>
		</td>
		<td>
			<center><a class='glyphicon glyphicon-user btn btn-sm btn-primary' href='perfil.php?usuario=".$row['usuario']."'></a></center>
		</td>
		<td>
			<center><a class='glyphicon glyphicon-envelope btn btn-sm btn-primary' href='enviar_msj.php?destin=".$row['usuario']."'></a></center>
		</td>
		<td>
			<center><a class='glyphicon glyphicon-remove btn btn-sm btn-danger deleteuser' onclick='deletemiembro(this.id)'  data-toggle='modal' data-target='#delete' id='d".$row['idusuario']."'></a></center>
		</td>
		</tr>";
	}
	while($row=mysql_fetch_array($cs))
	{
		echo "<tr>
		<td>
			<p>".$row['nombre']." ".$row['apellido']."</p>
		</td>
		<td>
			<center><p>".$row['Rating']."</p></center>
		</td>
		<td>
			<center><a class='glyphicon glyphicon-user btn btn-sm btn-info' href='perfil.php?usuario=".$row['usuario']."'></a></center>
		</td>
		<td>
			<center><a class='glyphicon glyphicon-envelope btn btn-sm btn-info' href='enviar_msj.php?destin=".$row['usuario']."'></a></center>
		</td>
		<td>
		</td>
		</tr>";
	}
	echo "</table>";
?>

<script src='js/bootstrap-table.js' type='text/javascript'></script>

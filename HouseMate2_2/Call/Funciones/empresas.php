<?php
	session_start();
    include("../../conexion.php");
	include("../Lenguaje/lenguaje.php");
    mysql_query("SET NAMES 'utf8'");
    $consulta = "SELECT empresa.idempresa, empresa.nombre, empresa.direccion, empresa.ratings ,tbusuario.nombre as 'first', tbusuario.apellido as 'second'
	FROM Empresa inner join usuario on empresa.dueño = usuario.idusuario inner join tbusuario on usuario.TempId = tbusuario.idusuario where  
	empresa.dueño = usuario.idusuario ORDER BY empresa.dueño ASC";
    //Revisamos que no esten vacios los campos
    $cs=mysql_query($consulta);
	$var = "";
	// data-show-columns='true'
    echo"<table data-toggle='table'  id='here' class='table table-striped table-hover'  data-search='true' data-show-refresh='true' data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>";
        echo"<thead><tr><th class='hidme'>".
		$lang['idempresa'].
		'</th><th>'.
		$lang['nombre']." ".$lang['apellido'].
		"</th><th>".
		$lang['Apellido'].
		"</th><th>".
		$lang['Nombre'].
		"</th><th>".
		$lang['Correo'].
		"</th><th>".
		$lang['Fecha-Nac'].
		"</th><th>".
		$lang['Tipous'].
		"</th>".
        "<th>".$lang['edit']."</th>
		<th>".$lang['Eliminares']."</th>
		</thead>";
    while($row=mysql_fetch_array($cs)){
        echo "<tr>
		<td id='a".$row['idUsuario']."'>".$row['idUsuario']."</td>
		<td>".$row['usuario']."</td><td>".$row['nombre']."</td>
		<td>".$row['apellido']."</td><td>".$row['correo']."</td>
		<td>".$row['fechanac']."</td><td>".$var."</td>
		<td><a onclick='cambiar(this.id)' href='#me3' data-toggle='tab' class='btn btn-warning' id='".$row['usuario']."'><i class='glyphicon glyphicon-edit'></i></a></td>
		<td><a data-toggle='modal' data-target='#delete' onclick='obtener(this.id)' class='btn btn-danger' id='x".$row['idUsuario']."'><i class='glyphicon glyphicon-remove'></i></a></td></tr>";
    }
    echo"</table>";
?>
 <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
<script src="js/bootstrap-table.js" ></script>
<script src="js/validaciones.js" type="text/javascript" ></script>
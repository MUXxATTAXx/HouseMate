<?php
	session_start();
  include("../../conexion.php");
	include("../Lenguaje/lenguaje.php");
  mysql_query("SET NAMES 'utf8'");
  $cs=mysql_query("SELECT empresa.idempresa, empresa.nombre, empresa.direccion, empresa.ratings ,tbusuario.nombre as 'first', tbusuario.apellido as 'second'
	FROM Empresa inner join usuario on empresa.dueño = usuario.idusuario inner join tbusuario on usuario.TempId = tbusuario.idusuario where
	empresa.dueño = usuario.idusuario ORDER BY empresa.dueño ASC");
    echo"<table data-toggle='table'  id='here' class='table table-striped table-hover'  data-search='true' data-show-refresh='true' data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>";
        echo"<thead><tr>
		<th>".$lang['Nombre']."</th>
		<th>".$lang['Duen']."</th>
		<th>".$lang['Direccion']."</th>
		<th>".$lang['miembros']."</th>
		<th>Rating</th>
		<th>".$lang['edit']."</th>
		<th>".$lang['Eliminares']."</th>
		</tr></thead>";

		while ($row = mysql_fetch_array($cs)){
				$value = mysql_query("Select idusuario From usuario where empresa = '".$row['idempresa']."'");
				$cantidad = mysql_num_rows($value);
        echo "<tr>
		<td>".$row['nombre']."</td>
		<td>".$row['first']." ".$row['second']."</td>
		<td>".$row['direccion']."</td>
		<td>$cantidad</td>
		<td>".$row['ratings']."</td>
		<td><a onclick='cambiar(this.id)' href='#me3' data-toggle='tab' class='btn btn-warning' id='".$row['idempresa']."'><i class='glyphicon glyphicon-edit'></i></a></td>
		<td><a data-toggle='modal' data-target='#eliminar' onclick='changedata(this.id)' class='btn btn-danger' id='x".$row['idempresa']."'><i class='glyphicon glyphicon-remove'></i></a></td>
		</tr>";
    }
    echo"</table>";

?>
 <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
<script src="js/bootstrap-table.js" ></script>
<script src="js/validaciones.js" type="text/javascript" ></script>

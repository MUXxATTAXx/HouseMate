<?php 
	session_start();
    include("../../../conexion.php");
	include("../../Lenguaje/lenguaje.php");
    mysql_query("SET NAMES 'utf8'");
	$empresa = $_POST['idempresa']; 
	$querymensajeget = mysql_query("SELECT empresasolicitud.aprovado, empresasolicitud.aprovado2, tbusuario.nombre,tbusuario.apellido,tbusuario.correo 
	FROM empresasolicitud inner join empresa on empresasolicitud.idempresa = Empresa.dueño inner join
	usuario on  Empresa.dueño = usuario.TempId inner join tbusuario on usuario.TempId = tbusuario.idusuario WHERE empresa.idempresa = '$empresa' AND empresasolicitud.aprovado = '1'");
	echo "<table class='table table-striped table-hover' data-toggle='table' data-search='true' data-show-refresh='true'  data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>
	<thead>
            <tr>
                <th>".$lang['Nombre']."</th>
                <th>E-mail</th>
                <th>".$lang['Status']."</th>
				<th>".$lang['Eliminar']."</th>
            </tr>
    </thead><tbody>";
	
	while ($row = mysql_fetch_array($querymensajeget))
	{
		echo "<tr>
                <td>".$row['nombre'].$row['apellido']."</td>
                <td>".$row['correo']."</td>
                <td>"
				.$row['aprovado2']."</td>
		</tr>";
	}
	"</tbody></table>";
?>
<link href='css/bootstrap.min.css' rel='stylesheet'/>	
<link href="css/bootstrap-table.css" rel="stylesheet"/>
<script src='js/jquery-1.11.2.min.js' type='text/javascript'></script>

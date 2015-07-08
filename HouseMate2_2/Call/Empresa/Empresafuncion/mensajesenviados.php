
<?php 
	session_start();
    include("../../../conexion.php");
	include("../../Lenguaje/lenguaje.php");

    mysql_query("SET NAMES 'utf8'");
	$empresa = $_POST['idempresa']; 
	$querymensajeget = mysql_query("SELECT empresasolicitud.idsolicitud, empresasolicitud.aprovado, empresasolicitud.aprovado2, tbusuario.nombre,tbusuario.apellido,tbusuario.correo 
	FROM empresasolicitud inner join usuario on empresasolicitud.idusuario = usuario.idusuario inner join tbusuario on usuario.TempId = tbusuario.idusuario 
	WHERE empresasolicitud.idempresa = '$empresa' AND empresasolicitud.aprovado2 = '0' or empresasolicitud.aprovado2 = '2' AND empresasolicitud.aprovado ='1'");
	echo "<table class='table table-striped table-hover' data-toggle='table' data-search='true' data-show-refresh='true'   data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>

	<thead>
            <tr>
                <th>".$lang['Nombre']."</th>
                <th>E-mail</th>
                <th>".$lang['Status']."</th>
				<th>".$lang['Eliminar']."</th>
            </tr>
    </thead>
	<tbody>";
	
	while ($row = mysql_fetch_array($querymensajeget))
	{
		echo "<tr>
                <td>".$row['nombre']." ".$row['apellido']."</td>
                <td>".$row['correo']."</td>
                <td>";
				switch($row['aprovado2'])
				{
					case 0:
						echo "<center><label class='label label-warning'>".$lang['naprovado']."</label></center>";
					break;
					case 1:
						echo "<center><label class='label label-warning'>".$lang['aprovado']."</label></center>";
					break;
					case 2:
						echo "<center><label class='label label-danger'>".$lang['No']."</label></center>";
					break;
				}
				echo "</td>
				<td><center><a data-toggle='modal' data-target='#deleteb'  onclick='obtener(this.id)' class='glyphicon glyphicon-remove btn btn-sm btn-danger' id='x".$row['idsolicitud']."'> </a></center></td>

			</tr>";
	}
	"</tbody></table>";
?>
<script src='js/jquery-1.11.2.min.js' type='text/javascript'></script>
		<script src='js/bootstrap-table.js' ></script>


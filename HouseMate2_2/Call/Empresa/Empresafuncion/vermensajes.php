
<?php 
	session_start();
    include("../../../conexion.php");
	include("../../Lenguaje/lenguaje.php");

    mysql_query("SET NAMES 'utf8'");
	$empresa = $_POST['idempresa']; 
	$querymensajeget = mysql_query("SELECT empresasolicitud.idsolicitud, empresasolicitud.aprovado, empresasolicitud.aprovado2, tbusuario.nombre,tbusuario.apellido,tbusuario.correo,tbusuario.usuario, usuario.Rating 
	FROM empresasolicitud inner join usuario on empresasolicitud.idusuario = usuario.idusuario inner join tbusuario on usuario.TempId = tbusuario.idusuario 
	WHERE empresasolicitud.idempresa = '$empresa' AND empresasolicitud.aprovado = '0' or empresasolicitud.aprovado = '1' And empresasolicitud.aprovado2 = 1");
	echo "<table class='table table-striped table-hover' data-toggle='table' data-search='true' data-show-refresh='true'   data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>

	<thead>
            <tr>
                <th>".$lang['Nombre']."</th>
                <th>Rating</th>
                <th>".$lang['Status']."</th>
				<th>".$lang['Perfil']."</th>
				<th>".$lang['mensaje']."</th>
				<th>".$lang['Eliminar']."</th>
				<th>".$lang['Salir']."</th>
				
            </tr>
    </thead>
	<tbody>";
	
	while ($row = mysql_fetch_array($querymensajeget))
	{
		echo "<tr>
                <td>".$row['nombre']." ".$row['apellido']."</td>
                <td>".$row['Rating']."</td>
                <td>";	
				switch($row['aprovado'])
				{
					case 0:
						echo "<label class='label label-danger'>".$lang['naprovado']."</label>";
					break;
					case 1:
						echo "<label class='label label-success'>".$lang['aprovado']."</label>";
					break;
					case 2:
						echo "<center><label class='label label-danger'>".$lang['No']."</label></center>";
					break;
				}
				echo "<td>
				<a class='glyphicon glyphicon-user btn btn-sm btn-info' href='perfil.php?usuario=".$row['usuario']."'></a>
			</td>
			<td>
				<a class='glyphicon glyphicon-envelope btn btn-sm btn-info' href='enviar_msj.php?destin=".$row['usuario']."'></a>
			</td>
				<td><a data-toggle='modal' data-target='#denegar'  onclick='deletemiembro(this.id)' class='glyphicon glyphicon-remove btn btn-sm btn-danger' id='n".$row['idsolicitud']."'> </a></td>
				<td><a data-toggle='modal' data-target='#accept'  onclick='deletemiembro(this.id)' class='glyphicon glyphicon-ok btn btn-sm btn-success' id='y".$row['idsolicitud']."'> </a></td>
			</tr>";
	}
	"</tbody></table>";
?>
<script src='js/bootstrap-table.js' type='text/javascript'></script>
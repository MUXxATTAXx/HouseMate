<?php 
	session_start();
    include("../../../conexion.php");
	include("../../Lenguaje/lenguaje.php");
    mysql_query("SET NAMES 'utf8'");	
	$querymensajeget = mysql_query("SELECT * FROM empresasolicitud inner join empresasolicitud.idempresa = empresa.dueño inner join
	usuario on empresa.dueño = usaurio.idusuario inner join tbusuario on 
	empresa on
	WHERE idempresa = $idempresa");
	echo "<table class='table table-striped table-hover' data-toggle='table' data-search='true' data-show-refresh='true'   data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>
	<thead>
            <tr>
                <th>".$lang['']."</th>
                <th>".$lang['']."</th>
                <th>".$lang['']."</th>
                <th>".$lang['']."</th>
            </tr>
    </thead><tbody>";
	
	while ($row = mysql_fetch_array($querymensajeget))
	{
		echo "<tr>
                <td>".$row['']."</td>
                <td>".$row['']."</td>
                <td>".$row['']."</td>
                <td>".$row['']."</td>
		</tr>;"
	}
	"</tbody></table>";
?>
<link href='css/bootstrap.min.css' rel='stylesheet'/>	
<link href="css/bootstrap-table.css" rel="stylesheet"/>
<script src='js/jquery-1.11.2.min.js' type='text/javascript'></script>

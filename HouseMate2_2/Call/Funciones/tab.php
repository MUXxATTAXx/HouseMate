<?php 
if(isset($_GET['actualstand']))
{
	$transac = $_GET['actualstand'];
	switch ($transac)
	{
		case 1:
		echo "<div class='tab-pane fade active in' id='home'>";
		include'admincliente/crear_cliente.php';
		echo "</div><div class='tab-pane fade' id='crear'>";
		include'admincliente/admin_mostrar.php';
		echo "</div><div class='tab-pane fade' id='sd'>";
		include("admincliente/admin_modificar.php");
		echo "</div><div class='tab-pane fade' id='eliminar'>";
		include('admincliente/admin_eliminar.php'); 
		echo "</div>";
		break;
		case 2:
		echo "<div class='tab-pane fade' id='home'>";
		include'admincliente/crear_cliente.php';
		echo "</div><div class='tab-pane fade active in' id='crear'>";
		include'admincliente/admin_mostrar.php';
		echo "</div><div class='tab-pane fade' id='sd'>";
		include("admincliente/admin_modificar.php");
		echo "</div><div class='tab-pane fade' id='eliminar'>";
		include('admincliente/admin_eliminar.php'); 
		echo "</div>";
		break;
		case 3:
		echo "<div class='tab-pane fade' id='home'>";
		include'admincliente/crear_cliente.php';
		echo "</div><div class='tab-pane fade' id='crear'>";
		include'admincliente/admin_mostrar.php';
		echo "</div><div class='tab-pane fade active in' id='sd'>";
		include("admincliente/admin_modificar.php");
		echo "</div><div class='tab-pane fade' id='eliminar'>";
		include('admincliente/admin_eliminar.php'); 
		echo "</div>";
		break;
		case 4:
		echo "<div class='tab-pane fade' id='home'>";
		include'admincliente/crear_cliente.php';
		echo "</div><div class='tab-pane fade' id='crear'>";
		include'admincliente/admin_mostrar.php';
		echo "</div><div class='tab-pane fade' id='sd'>";
		include("admincliente/admin_modificar.php");
		echo "</div><div class='tab-pane fade active in' id='eliminar'>";
		include('admincliente/admin_eliminar.php'); 
		echo "</div>";
		break;
	}
}
else
{
	echo "<div class='tab-pane fade active in' id='home'>";
	include'admincliente/crear_cliente.php';
	echo "</div><div class='tab-pane fade' id='crear'>";
	include'admincliente/admin_mostrar.php';
	echo "</div><div class='tab-pane fade' id='sd'>";
	include("admincliente/admin_modificar.php");
	echo "</div><div class='tab-pane fade' id='eliminar'>";
	include('admincliente/admin_eliminar.php'); 
	echo "</div>";
}
?>
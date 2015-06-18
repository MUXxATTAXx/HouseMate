<?php
if(isset($_POST['idre'])){
	require('../../Call/Funciones/modificar_inmueblereal.php');
}
else{
	require('../../Call/Funciones/modificar_inmueble.php');
}
?>
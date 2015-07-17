<?php
session_start();
include "../../conexion.php";
include "../Lenguaje/lenguaje.php";
if (isset($_POST['name']) and $_POST['name'] != "undefined" and $_POST['name'] != "' --")
{
  $variable = $_POST['name'];
  $quero = mysql_query("Select empresa.nombre, empresa.telefono, empresa.direccion, empresa.nit, empresa.telefono2, empresa.imagen, empresa.descrip
  from empresa inner join usuario on empresa.dueño = usuario.idusuario inner join tbusuario on usuario.Tempid = tbusuario.idusuario
  where empresa.nombre = '$variable'");
  if(mysql_num_rows($quero) > 0){
    while($row = mysql_fetch_array($quero)){
      include "Busqueda/busquedaconempresa.php";
    }
  }
  else{
    include "Busqueda/busquedaempresa.php";
  }
}
else{
  include "Busqueda/busquedaempresa.php";
 }?>

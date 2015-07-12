<?php
$empresaid = $_POST['idempresa'];
$titulo = $_POST['titulo'];
$mensaje = $_POST['mensaje'];
$first = $_POST['first'];
if($titulo != "" and $mensaje != "" and isset($empresaid) and isset($first)){
        edit($empresaid,$titulo,$mensaje,$first);
    }
	else
	{
		include("../../Lenguaje/lenguaje.php");
		echo "<label class='label label-warning'>".$lang['missing']."</label>";

	}
  function edit($empresaid,$titulo,$mensaje,$first)
  {
  	session_start();
  	include("../../../conexion.php");
  	include("../../Lenguaje/lenguaje.php");
  	$conta = mysql_query("Select idmensaje From empresamen Where idempresa = '$empresaid' and idmensaje = '$first'");
  	$check = mysql_num_rows($conta);
  	$gettitulo = mysql_query("Select titulo From empresamen Where titulo = '$titulo'");
    $existeT = mysql_num_rows($gettitulo);
    if($check > 0){
    	if(mysql_num_rows($gettitulo) > 0){
        $checkgut = mysql_query("Select titulo From empresamen Where titulo ='$titulo'
        and idempresa ='$empresaid' and idmensaje = '$first'");
        if(mysql_num_rows($checkgut) == 1){
          $query = mysql_query("Update empresamen Set titulo = '$titulo', texto ='$mensaje' Where idempresa = '$empresaid' and idmensaje = '$first'");
          echo "<br><label class='label label-success'>".$lang['modificar-exito']."</label>";
        }
        else {
          echo "<br><label class='label label-warning'>".$lang['TY']."</label>";
        }
    	}
    	else{
    		$query = mysql_query("Update empresamen Set titulo = '$titulo', texto ='$mensaje' Where idempresa = '$empresaid' and idmensaje = '$first'");
    		echo "<br><label class='label label-success'>".$lang['modificar-exito']."</label>";
    	}
    }
    else{
    }
  }
?>

<?php
    include "conexion.php";
    if(isset($_SESSION['id'])){
        $usuario = $_SESSION['id'];
    }

    if(isset($_POST['nombre-pared']) and $_POST['nombre-pared'] != "" and isset($_POST['valor-pared']) and isset($_POST['valor-pared']) != ""){
        
        $tpnombre = trim($_POST['nombre-pared']);
        $tpvalor = trim($_POST['valor-pared']);
        
        $pared = "SELECT * FROM peritaje WHERE categoria = '1'";
        $pared_con = mysql_query($pared);
        $idpared = (mysql_num_rows($pared_con) + 1);
        
        $pared2 = "INSERT INTO peritaje values('$idpared','$tpnombre','$tpvalor','$tpvalor','$tpvalor','1','$usuario','1')";
        $pared2_con = mysql_query($pared2);
        echo"<span class='label label-danger'>".$lang['peri-exito']."</span>";
        
    }
    else{
        echo"<span class='label label-danger'>".$lang['peri-vacio']."</span>".mysql_error();
    }

?>
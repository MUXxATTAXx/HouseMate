<?php
    include "conexion.php";
    if(isset($_SESSION['id'])){
        $usuario = $_SESSION['id'];
    }

    if(isset($_POST['nombre-pared']) and isset($_POST['valor-pared'])){
        $tpnombre = $_POST['nombre-pared'];
        $tpvalor = $_POST['valor-pared'];
        $pared = "SELECT * FROM peritaje WHERE categoria = '1'";
        echo $pared;
        $pared_con = mysql_query($pared);
        $idpared = (mysql_num_rows($pared_con) + 1);
        echo $idpared;
        $pared2 = "INSERT INTO peritaje values('$idpared','$tpnombre','$tpvalor','$tpvalor','$tpvalor','1','$usuario','1')";
        echo $pared2;
        $pared2_con = mysql_query($pared2);
    }

?>
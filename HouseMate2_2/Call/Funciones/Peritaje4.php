<?php
session_start();
    include "../../conexion.php";
    include "../Lenguaje/lenguaje.php";
    if(isset($_SESSION['id'])){
        $usuario = $_SESSION['id'];
    }

    if(isset($_POST['nombre_pared']) && isset($_POST['valor_pared']) and $_POST['valor_pared'] > 0){
        
        $tpnombre = trim($_POST['nombre_pared']);
        $tpvalor = trim($_POST['valor_pared']);
        
        $idioma = $_SESSION['lang'];
        if($idioma == "es"){
            $idioma1 = "1";
        }
        elseif($idioma == "en"){
            $idioma1 = "2";
        }else{
            $idioma1 = "1";
        }
        $pared = "SELECT * FROM peritaje WHERE categoria = '1' and idioma = '$idioma1'";
        $pared_con = mysql_query($pared);    
        $idpared = $idioma.(mysql_num_rows($pared_con) + 1);
        
        $nombre1 = strtolower($tpnombre);
        $nombre = "SELECT * FROM peritaje WHERE nombre ='$nombre1'";
        $nombre_con = mysql_query($nombre);
        if((mysql_num_rows($nombre_con)) <= 0){
            $pared2 = "INSERT INTO peritaje values('$idpared','$tpnombre','$idioma1','$tpvalor','$tpvalor','$tpvalor','1','$usuario','1')";
            $pared2_con = mysql_query($pared2);
             echo "<span class='label label-success'>".$lang['peri-exito']."</span>";
        }
        else{
            echo "<span class='label label-error'>".$lang['peri-TP-usado']."</span>";
        }       
    }
    else{
        echo "<span class='label label-error'>".$lang['peri-vacio']."</span>".mysql_error();
    }

?>
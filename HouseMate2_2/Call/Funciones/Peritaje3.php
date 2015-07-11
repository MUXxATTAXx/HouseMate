<?php
session_start();
    include "../../conexion.php";
    include "../Lenguaje/lenguaje.php";
    mysql_query("SET NAMES 'utf8'");
    if(isset($_SESSION['id'])){
        $usuario = $_SESSION['id'];
    }

    if(isset($_POST['nombre_techo']) && isset($_POST['valor_techo']) and $_POST['valor_techo'] > 0){
        mysql_query("SET NAMES 'utf8'");
        $categoria = "TT";
        $ttnombre = trim($_POST['nombre_techo']);
        $ttvalor = trim($_POST['valor_techo']);
        if($lang['Start'] == "Inicio"){
            $tidioma1 = "1";
            $tidioma = "es";
        }
        else
        {
            $tidioma1 = "2";
            $tidioma = "en";
        }
        $techo = "SELECT * FROM peritaje WHERE idioma = '$tidioma1' and categoria = '3'";
        $techo_con = mysql_query($techo);
        $idtecho = $tidioma.$categoria.(mysql_num_rows($techo_con) + 1);

        $tnombre1 = mb_convert_encoding($ttnombre,'UTF-8');
        $tnombre = "SELECT * FROM peritaje WHERE nombre ='$tnombre1'";
        $tnombre_con = mysql_query($tnombre);
        if((mysql_num_rows($tnombre_con)) <= 0){
            $techo2 = "INSERT INTO peritaje values('$idtecho','$ttnombre','$tidioma1','$ttvalor','null','null','3','$usuario','1')";
            $techo2_con = mysql_query($techo2);
            if(isset($techo2_con)){
                echo "<span class='label label-success'>".$lang['peri-exito']."</span>";
            }
            else{
                echo mysql_error();
            }

        }
        else{
            echo "<span class='label label-error'>".$lang['peri-TP-usado']."</span>";
        }
    }
    else{
        echo "<span class='label label-error'>".$lang['peri-vacio']."</span>".mysql_error();
    }

?>

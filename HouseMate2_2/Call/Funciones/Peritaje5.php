<?php
session_start();
    include "../../conexion.php";
    include "../Lenguaje/lenguaje.php";
    mysql_query("SET NAMES 'utf8'");
    if(isset($_SESSION['id'])){
        $usuario = $_SESSION['id'];
    }
    if(isset($_POST['Municipio']) && isset($_POST['valor_local1']) and $_POST['valor_local1'] > 0 && isset($_POST['valor_local2']) and $_POST['valor_local2'] > 0 && isset($_POST['valor_local3']) ){

        mysql_query("SET NAMES 'utf8'");
        $categoria = "VL";
        $vlnombre = trim($_POST['Municipio']);
        $vlvalor1 = trim($_POST['valor_local1']);
        $vlvalor2 = trim($_POST['valor_local2']);
        $vlvalor3 = trim($_POST['valor_local3']);
        if($lang['Start'] == "Inicio"){
            $lidioma1 = "1";
            $lidioma = "es";
        }
        else
        {
            $lidioma1 = "2";
            $lidioma = "en";
        }
        $local = "SELECT * FROM peritaje WHERE idioma = '$lidioma1' and categoria = '5'";
        $local_con = mysql_query($local);
        $idlocal = $categoria.(mysql_num_rows($local_con) + 1);

        $lnombre1 = mb_convert_encoding($vlnombre,'UTF-8');
        $lnombre = "SELECT * FROM peritaje WHERE nombre ='$lnombre1'";
        $lnombre_con = mysql_query($lnombre);
        if((mysql_num_rows($lnombre_con)) <= 0){
            $local2 = "INSERT INTO peritaje values('$idlocal','$vlnombre','$lidioma1','$vlvalor1','$vlvalor2','$vlvalor3','5','$usuario','1')";
            $local2_con = mysql_query($local2);
            if(isset($local2_con)){
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

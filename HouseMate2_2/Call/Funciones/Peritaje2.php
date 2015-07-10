<?php
session_start();
    include "../../conexion.php";
    include "../Lenguaje/lenguaje.php";
    mysql_query("SET NAMES 'utf8'");
    if(isset($_SESSION['id'])){
        $usuario = $_SESSION['id'];
    }

    if(isset($_POST['nombre_suelo']) && isset($_POST['valor_suelo']) and $_POST['valor_suelo'] > 0){
        
        $tsnombre = trim($_POST['nombre_suelo']);
        $tsvalor = trim($_POST['valor_suelo']);
        if($lang['Start'] == "Inicio"){
            $idioma1 = "1";
        }
        else
        {
            $idioma1 = "2";
        }
        $suelo = "SELECT * FROM peritaje WHERE idioma = '$sidioma1'";
        $suelo_con = mysql_query($suelo);    
        $idsuelo = (mysql_num_rows($suelo_con) + 1);
        
        $snombre1 = strtolower($tsnombre);
        $snombre = "SELECT * FROM peritaje WHERE nombre ='$snombre1'";
        $snombre_con = mysql_query($snombre);
        if((mysql_num_rows($snombre_con)) <= 0){
            $suelo2 = "INSERT INTO peritaje values('$idsuelo','$tsnombre','$sidioma1','$tsvalor','$tsvalor','$tsvalor','2','$usuario','1')";
            $suelo2_con = mysql_query($suelo2);
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
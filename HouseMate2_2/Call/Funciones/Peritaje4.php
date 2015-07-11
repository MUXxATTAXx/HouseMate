<?php
session_start();
    include "../../conexion.php";
    include "../Lenguaje/lenguaje.php";
    mysql_query("SET NAMES 'utf8'");
    if(isset($_SESSION['id'])){
        $usuario = $_SESSION['id'];
    }

    if(isset($_POST['nombre_constru']) and ($_POST['nombre_constru']) != "" && isset($_POST['valor_constru']) and $_POST['valor_constru'] > 0){
        mysql_query("SET NAMES 'utf8'");
        $categoria = "DC";
        $dcnombre = trim($_POST['nombre_constru']);
        $dcvalor = trim($_POST['valor_constru']);
        if($lang['Start'] == "Inicio"){
            $cidioma1 = "1";
            $cidioma = "es";
        }
        else
        {
            $cidioma1 = "2";
            $cidioma = "en";
        }
        $constru = "SELECT * FROM peritaje WHERE idioma = '$cidioma1' and categoria = '4'";
        $constru_con = mysql_query($constru);
        $idconstru = $cidioma.$categoria.(mysql_num_rows($constru_con) + 1);

        $cnombre1 = mb_convert_encoding($dcnombre,'UTF-8');
        $cnombre = "SELECT * FROM peritaje WHERE nombre ='$cnombre1'";
        $cnombre_con = mysql_query($cnombre);
        if((mysql_num_rows($cnombre_con)) <= 0){
            $constru2 = "INSERT INTO peritaje values('$idconstru','$dcnombre','$cidioma1','$dcvalor','null','null','4','$usuario','1')";
            $constru2_con = mysql_query($constru2);
            if(isset($constru2_con)){
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

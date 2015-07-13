<?php
session_start();
    include "../../conexion.php";
    include "../Lenguaje/lenguaje.php";
    mysql_query("SET NAMES 'utf8'");

    if(isset($_POST['id']) and ($_POST['id']) != ""){
            $id_peri = trim($_POST['id']);
            $eliminar = "DELETE FROM peritaje WHERE id_peri ='$id_peri' ";
            $eliminar_con = mysql_query($eliminar);
            if(isset($eliminar_con)){
              echo "<span class='label label-error'>".$lang['peri_elim_exito']."</span>"
            }
    }
    else{
        echo "<span class='label label-error'>".$lang['peri-vacio']."</span>".mysql_error();
    }

?>

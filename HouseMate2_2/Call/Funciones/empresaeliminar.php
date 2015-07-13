<?php
session_start();
include("../../conexion.php");
include("../Lenguaje/lenguaje.php");
$id = $_POST['id'];
if(isset($id)){
      delete($id);
  }
function delete($id){
  session_start();
  include("../../conexion.php");
  include("../Lenguaje/lenguaje.php");
  $idt = str_replace("x","",$id);
  $query = mysql_query("Select idempresa From empresa where idempresa = '$idt'");
  while($row = mysql_fetch_array($query))
  {
    $empresa = $row['idempresa'];
    $query = mysql_query("Delete From empresa where idempresa = '$idt'");
    $query2 = mysql_query("Update empresa set idempresa = idempresa - 1 where idempresa > '$empresa'");
    $query3 = mysql_query("Update usuario set empresa = ''  where empresa ='$idt'");
    $query4 = mysql_query("Insert into ");
    	echo "<label class='label label-success'>".$lang['modificar-exito']."</label>";
  }
}
?>

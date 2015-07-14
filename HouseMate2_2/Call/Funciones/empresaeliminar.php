<?php
$id = $_POST['id'];
if(isset($id)){
      delete($id);
  }
function delete($id){
  session_start();
  include("../../conexion.php");
  include("../Lenguaje/lenguaje.php");
  	mysql_query("SET NAMES 'utf8'");
  $idt = str_replace('x','',$id);
  $query = mysql_query("Select * From empresa where IdEmpresa = '$idt'");
    while($row = mysql_fetch_array($query))
    {
      $empresa = $row['IdEmpresa'];
      $imagen = $row['imagen'];
      $filename = "../../img/Empresas/".$imagen;
      unlink($filename);
      $query = mysql_query("Delete From empresa where idempresa = '$idt'");
      $query2 = mysql_query("Update empresa set idempresa = idempresa - 1 where idempresa > '$empresa'");
      $query3 = mysql_query("Update usuario set empresa = ''  where empresa ='$idt'");
      	echo "<center><label class='label label-success'>".$lang['modificar-exito']."</label></center>";
    }
}
?>

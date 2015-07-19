<?php
$variable = $_POST['valor'];
$variable2 = $_POST['valor2'];
$inmueble = $_POST['inmueble'];
$remanen = $_POST['geting'];
if(isset($variable) and isset($variable2) and isset($inmueble) and isset($remanen))
{
  ingresar($variable,$variable2,$inmueble,$remanen);
}
function ingresar ($numero1,$numero2,$inmueble,$remanen)
{
  session_start();
  include "../../conexion.php";
  include "../Lenguaje/lenguaje.php";
  if($numero1 != 0.00 and $numero2 != 0.00)
  {
  $sujeto = $_SESSION['id'];
  $total = $numero1 + $numero2;
  $query = mysql_query("Update inmueble set aprovado = '1', valuo1 = '$numero1',valuo2 = '$numero2',total = '$total',remaining = '$remanen', perito='$sujeto' where idinmueble = '$inmueble'");
  echo "<label class='label label-success'>".$lang['modificar-exito']."</label>
  <script type='text/javascript'>
window.location = 'peritohomepage.php';
</script>";
  }
  else { ?>
   <label class='label label-warning'><?php echo $lang['peri-vacio'] ?></label>
<?php  }
}
?>

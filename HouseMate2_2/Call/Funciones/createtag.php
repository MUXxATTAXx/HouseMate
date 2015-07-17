<?php
$estado = $_POST['amount'];
$estado2 = $_POST['id'];
if(isset($estado) and isset($estado2))
{
  create($estado,$estado2);
}
function create($estado,$estado2)
{
include '../Lenguaje/lenguaje.php';
for($i = 1;$i <= $estado; $i++)
{
echo  "<div class='input-group'>
     <input onkeypress='return deci(event)' type='number' class='form-control' min='0' step='1' id='".$estado2."gate".$i."'
      name='".$estado2."gate".$i."' placeholder='".$lang['are']."'>
     <span class='input-group-addon label-info'>m^2</span>
  </div>";
}
}
?>

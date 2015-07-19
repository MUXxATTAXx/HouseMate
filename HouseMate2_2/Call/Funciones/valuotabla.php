<?php

start(5);
function start ($id)
{
  session_start();
  include "../Lenguaje/lenguaje.php";?>

    <?php
    for($nur = 0; $nur < 5;$nur++)
    {
      ?>
      <tr id="especial<?= $nur ?>" class="hidme">
      <td ><?php
      switch($nur)
      {
        case 0: echo $lang['Terraza'];
        break;
        case 1: echo $lang['Piscinas'];
        break;
        case 2: echo $lang['Jardines'];
        break;
        case 3: echo $lang['Cocheras'];
        break;
        case 4: echo $lang['Sotanos'];
        break;
      }?></td>
      <td id="Atabla<?= $nur?>" class="progress-bar progress-bar-primary"></td><td class="progress-bar progress-bar-primary" id="Btabla<?= $nur ?>"></td><td class="progress-bar progress-bar-primary" id="Ctabla<?= $nur ?>"></td>
      </tr>
      <?php
    }
    ?>

<?php
}
?>

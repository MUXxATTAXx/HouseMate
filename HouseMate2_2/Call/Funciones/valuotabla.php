<?php
start(5);
function start ($id)
{ ?>

    <?php
    for($nur = 0; $nur < 5;$nur++)
    {
      ?>
      <tr id="especial<?= $nur ?>" class="hidme">
      <td id="Atabla<?= $nur?>" class="progress-bar progress-bar-primary"></td><td class="progress-bar progress-bar-primary" id="Btabla<?= $nur ?>"></td><td class="progress-bar progress-bar-primary" id="Ctabla<?= $nur ?>"></td>
      </tr>
      <?php
    }
    ?>

<?php
}
?>

<?php
start(5);
function start ($id)
{ ?>

    <?php
    for($nur = 0; $nur < 5;$nur++)
    {
      ?>
      <tr id="especial<?= $nur ?>" class="hidme">
      <td id="Atabla<?= $nur?>"></td><td id="Btabla<?= $nur ?>"></td><td id="Ctabla<?= $nur ?>"></td>
      </tr>
      <?php
    }
    ?>

<?php
}
?>

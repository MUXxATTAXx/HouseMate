<?php
start(5);
function start ($id)
{ ?>

    <?php
    for($nur = 0; $nur < 5;$nur++)
    {
      ?>
      <tr id="especial<?= $nur ?>" class="hidme">
      <td id="Atabla<?= $nur?>">A</td><td id="Btabla<?= $nur ?>">A</td><td id="Ctabla<?= $nur ?>">A</td>
      </tr>
      <?php
    }
    ?>

<?php
}
?>

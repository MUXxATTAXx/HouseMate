  <?php
  $stringed = "";
  for($i=1;$i <= 5;$i++ )
  {
    switch ($i) {
        case 1:
        $stringed = $queroe1;
        break;
        case 2:
        $stringed = $queroe2;
        break;
        case 3:
        $stringed = $queroe3;
        break;
        case 4:
        $stringed = $queroe4;
        break;
        case 5:
        $stringed = $queroe5;
        break;
      }
      $formulacionsql = mysql_query($stringed);
  while($comienza = mysql_fetch_array($formulacionsql))
  {
    $estado = 0;
    $numerodigito = mysql_num_rows($formulacionsql);
    $ejecutar = $comienza['Valor'];
    $porciones = explode("-",$ejecutar);
    for($nos = 0;$nos <= 4;$nos++){
      $resultadoquery = $porciones[$nos];
      echo $resultadoquery;
      if ($resultadoquery != 0 || $resultadoquery != null)
      {
          $estado++;
          $numeroiden = $nos +1;
          $numeradopor2 = 7 +$nos;
  ?>
  <div class='tab-pane fade active in' id='<?=$numeroiden ?>' >
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                        <label><?= $lang['VU'] ?> (<?= $lang['Constr'] ?>):</label>
                          <div class="input-group">
                          <span class="input-group-addon label-info">$</span>
                        <input class="form-control" type="number" id="unitaryadded<?php echo $numeroiden+1 ?>"  onchange="valuechange<?php echo $numeroiden+1 ?>()">
                          <span class="input-group-addon label-info"></span>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="row row-centered">
                            <label><?= $lang['Constr']?></label>
                          </div>
                          <div class="row row-centered">
                            <label id="valor" class="btn label label-info"><?php
                                echo $comienza['Valor']." m^2";
                                $valorR = $comienza['Valor'];
                             ?></label>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <br>
                  <table class='table table-striped table-hover'>
                  <thead>
                    <tr>
                  <th><?= $lang['FE'] ?></th>
                  <th><?=$lang['FD']?></th>
                  <th><?=$lang['FFU'] ?></th>
                  <th><?= $lang['VNR'] ?></th>
                  <th><?= $lang['VUR']  ?></th>
                  </tr>
                  </thead>
                  <tr>
                    <td class="row btn btn-sm " >
                      <label id="estado2A" >  <?php $estado = $row['estado'];
                        switch($estado)
                        { case 1:
                          echo "1";
                          break;
                          case 2:
                          echo "0.9968";
                          break;
                          case 3:
                          echo "0.9748";
                          break;
                          case 4:
                          echo "0.9191";
                          break;
                          case 5:
                          echo "0.819";
                          break;
                          case 6:
                          echo "0.668";
                          break;
                          case 7:
                          echo "0.474";
                          break;
                          case 8:
                          echo "0.248";
                          break;
                          case 9:
                          echo "0.135";
                          break;
                          case 10:
                          echo "0";
                          break; } ?></label></td>
                      <td class="row btn btn-sm"><label id="estado2B"></label></td>
                      <td class="row btn btn-sm "><label id="estado2C">1</label></td>
                      <td class="row btn btn-sm "><label id="estado2D">0</label></td>
                      <td class="row btn btn-sm "><label id="estado2E"></label></td>
                  </tr>
                  </table>
                  <div class="col-sm-6">
                  <label><?=$lang['denor']  ?></label><label id="resultado1">0</label>
                </div><br>
                </div>
  <?php
    }
  }
  }
}?>

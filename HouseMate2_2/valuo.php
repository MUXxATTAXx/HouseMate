<head>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<title>Inicio</title>
</head>
<body id="intro" onload="load();load2()">
<?php
    include("Header/barranav3.php");
?>
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 toppad">
    <div class="panel panel-info">
<div class="panel-heading">
      <label><?= $lang['ValuoR']  ?></label>
</div>
  <div class="panel-body">
    <?php
    $empresa = $_GET['super'];
    $query = mysql_query("Select * FROM inmueble where IdInmueble = '$empresa'");
    $varlo = $row['IdInmueble'];
    $quero = mysql_query("Select * FROM etiqueta where IdInmueble = '$empresa' and Netiqueta > '5'");
    $quer1 = mysql_query("Select * FROM etiqueta where IdInmueble = '$empresa' and Netiqueta = '6'");
    $quer2 = mysql_query("Select * FROM etiqueta where IdInmueble = '$empresa' and Netiqueta = '7'");
    $quer3 = mysql_query("Select * FROM etiqueta where IdInmueble = '$empresa' and Netiqueta = '8'");
    $quer4 = mysql_query("Select * FROM etiqueta where IdInmueble = '$empresa' and Netiqueta = '9'");
    $quer5 = mysql_query("Select * FROM etiqueta where IdInmueble = '$empresa' and Netiqueta = '10'");
    while ($row = mysql_fetch_array($query))
    {
      ?>
    <br>
      <div class="row">
          <div class="col-sm-4">
            <div class="row">
            <label><?= $lang['Direccion']  ?>:</label>
          </div>
          <div class="row">
            <i><?= $row['Direccion']  ?></i>
            <p><?= $row['Descripcion'] ?></p>
          </div>
          </div>
          <div class="col-sm-2">
            <div class="row row-centered">
            <label><?= $lang['age']  ?>:</label>
          </div>
          <div class="row row-centered">
            <label id="age" class="btn label label-info"><?= $row['age']  ?></label>
          </div>
          </div>
          <div class="col-sm-2">
            <div class="row row-centered">
            <label ><?= $lang['agev']  ?>:</label>
          </div>
          <div class="row row-centered">
            <label id="aget" class="btn label label-info">75</label>
          </div>
          <div class="col-sm-4">

          </div>

          </div>
          <div class="col-sm-2">
            <div class="row row-centered">
            <label><?= $lang['area2']  ?>:</label>
          </div>
          <div class="row row-centered">
            <label id="age" class="btn label label-info"><?= $row['areadeconstruc']." m^2"  ?></label>
          </div>
          </div>
          <div class="col-sm-2">
            <div class="row row-centered">
            <label ><?= $lang['area1']  ?>:</label>
          </div>
          <div class="row row-centered">
            <label id="aget" class="btn label label-info"><?= $row['areadeterreno']." m^2"?></label>
          </div>
          </div>

      </div>
      <br>
    <ul  class="nav nav-tabs">
        <li id='me' class='negro'><a href='#home' data-toggle='tab' class="glyphicon glyphicon-usd"></a></li>
        <?php
        while($row2 = mysql_fetch_array($quero))
        {
        $atacante = $row2['Netiqueta'];  ?>
        <li id='me<?= $atacante ?>' class='negro'><a href='#home<?= $atacante ?>' data-toggle='tab'>
          <?php
          switch ($atacante) {
            case 6:
            echo $lang['Terraza'];
            break;
            case 7:
            echo $lang['Piscinas'];
            break;
            case 8:
            echo $lang['Jardines'];
            break;
            case 9:
            echo $lang['Cocheras'];
            break;
            case 10:
            echo $lang['Sotanos'];
            break;
          }?></a></li>
<?php   }
         ?>

    </ul>

    <div id='myTabContent' class='tab-content'>
                <!--Inmuebles-->
                <div class='tab-pane fade active in' id='home'>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                        <label><?= $lang['VU'] ?> (<?= $lang['Constr'] ?>):</label>
                          <div class="input-group">
                          <span class="input-group-addon label-info">$</span>
                        <input class="form-control" type="number" id="unitaryadded"  onchange="valuechange()">
                          <span class="input-group-addon label-info"></span>
                        </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                        <label><?= $lang['VU'] ?> (<?= $lang['lot'] ?>):</label>
                          <div class="input-group">
                          <span class="input-group-addon label-info">$</span>
                        <input class="form-control" type="number"  id="unitaryadded2" onchange="valuechange2()">
                          <span class="input-group-addon label-info"></span>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
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
                      <label id="estadoA" >  <?php $estado = $row['estado'];
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
                            <td class="row btn btn-sm"><label id="estadoB"></label></td>
                      <td class="row btn btn-sm "><label id="estadoC">1</label></td>
                      <td class="row btn btn-sm "><label id="estadoD">0</label></td>
                      <td class="row btn btn-sm "><label id="estadoE"></label></td>
                  </tr>
                  </table>
                    <div class="col-sm-6">
                    <label><?=$lang['denor']  ?></label><label id="resultado" >0</label>
                  </div>
                  <br>

                </div>
<!--Home 6--><div class='tab-pane fade' id='home6' >
                <div class="row">
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-6">
                      <label><?= $lang['VU'] ?> (<?= $lang['Constr'] ?>):</label>
                        <div class="input-group">
                        <span class="input-group-addon label-info">$</span>
                      <input class="form-control" type="number" id="unitaryadded3"  onchange="valuechange3()">
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
                          <label id="valor" class="btn label label-info"><?php while($row2 = mysql_fetch_array($quer1))
                          {
                              echo $row2['Valor']." m^2";
                              $valorR2 = $row2['Valor'];
                          } ?></label>

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
<!--Home 7--><div class='tab-pane fade' id='home7' >
                <div class="row">
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-6">
                      <label><?= $lang['VU'] ?> (<?= $lang['Constr'] ?>):</label>
                        <div class="input-group">
                        <span class="input-group-addon label-info">$</span>
                      <input class="form-control" type="number" id="unitaryadded4"  onchange="valuechange4()">
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
                          <label id="valor2" class="btn label label-info"><?php while($row2 = mysql_fetch_array($quer2))
                          {
                              echo $row2['Valor']." m^2";
                              $valorR3 = $row2['Valor'];
                          } ?></label>
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
                    <label id="estado3A" >  <?php $estado = $row['estado'];
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
                          <td class="row btn btn-sm"><label id="estado3B"></label></td>
                    <td class="row btn btn-sm "><label id="estado3C">1</label></td>
                    <td class="row btn btn-sm "><label id="estado3D">0</label></td>
                    <td class="row btn btn-sm "><label id="estado3E"></label></td>
                </tr>
                </table>
                <div class="col-sm-6"><label><?=$lang['denor']  ?></label><label id="resultado2" >0</label>
                </div><br>
              </div>
<!--Home 8--><div class='tab-pane fade' id='home8' >
        <div class="row">
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
              <label><?= $lang['VU'] ?> (<?= $lang['Constr'] ?>):</label>
                <div class="input-group">
                <span class="input-group-addon label-info">$</span>
              <input class="form-control" type="number" id="unitaryadded5"  onchange="valuechange5()">
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
                  <label id="valor3" class="btn label label-info"><?php while($row2 = mysql_fetch_array($quer3))
                  {
                      echo $row2['Valor']." m^2";
                      $valorR4 = $row2['Valor'];
                  } ?></label>
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
            <label id="estado4A" >  <?php $estado = $row['estado'];
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
                  <td class="row btn btn-sm"><label id="estado4B"></label></td>
            <td class="row btn btn-sm "><label id="estado4C">1</label></td>
            <td class="row btn btn-sm "><label id="estado4D">0</label></td>
            <td class="row btn btn-sm "><label id="estado4E"></label></td>
        </tr>
        </table>
        <div class="col-sm-6"><label><?=$lang['denor']  ?></label><label id="resultado3" >0</label>
        </div><br>
        </div>
<!--Home 9--><div class='tab-pane fade' id='home9' >
          <div class="row">
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-6">
                <label><?= $lang['VU'] ?> (<?= $lang['Constr'] ?>):</label>
                  <div class="input-group">
                  <span class="input-group-addon label-info">$</span>
                <input class="form-control" type="number" id="unitaryadded6"  onchange="valuechange6()">
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
                    <label id="valor4" class="btn label label-info"><?php while($row2 = mysql_fetch_array($quer4))
                    {
                        echo $row2['Valor']." m^2";
                        $valorR5 = $row2['Valor'];
                    } ?></label>
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
              <label id="estado5A" >  <?php $estado = $row['estado'];
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
                    <td class="row btn btn-sm"><label id="estado5B"></label></td>
              <td class="row btn btn-sm "><label id="estado5C">1</label></td>
              <td class="row btn btn-sm "><label id="estado5D">0</label></td>
              <td class="row btn btn-sm "><label id="estado5E"></label></td>
          </tr>
          </table>
          <div class="col-sm-6"><label><?=$lang['denor']  ?></label><label id="resultado4">0</label>
          </div><br>
        </div>
<!--Home 10--><div class='tab-pane fade' id='home10' >
          <div class="row">
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-6">
                <label><?= $lang['VU'] ?> (<?= $lang['Constr'] ?>):</label>
                  <div class="input-group">
                  <span class="input-group-addon label-info">$</span>
                <input class="form-control" type="number" id="unitaryadded7"  onchange="valuechange7()">
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
                    <label id="valor5" class="btn label label-info"><?php while($row2 = mysql_fetch_array($quer5))
                    {
                        echo $row2['Valor']." m^2";
                        $valorR6 = $row2['Valor'];
                    } ?></label>
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
              <label id="estado6A" >  <?php $estado = $row['estado'];
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
                    <td class="row btn btn-sm"><label id="estado6B"></label></td>
              <td class="row btn btn-sm "><label id="estado6C">1</label></td>
              <td class="row btn btn-sm "><label id="estado6D">0</label></td>
              <td class="row btn btn-sm "><label id="estado6E"></label></td>
          </tr>
          </table>
          <div class="col-sm-6"><label><?=$lang['denor']  ?></label><label id="resultado5" >0</label>
          </div><br></div>

        </div>
<br>

<div class="panel-footer">
  <div class="row">
      <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-6">
      <label><?= $lang['builvalue'] ?>:</label>
    </div>

  </div>
    <div class="col-sm-6">
      <div class="input-group">
      <span class="input-group-addon label-info">$</span>
    <input class="form-control" type="number" id="esda">
      <span class="input-group-addon label-info"></span>
    </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-6">
      <label><?= $lang['lotvalue'] ?>:</label>
    </div>
  </div>
    <div class="col-sm-6">
      <div class="input-group">
      <span class="input-group-addon label-info">$</span>
    <input class="form-control" type="number" id="esda2">
      <span class="input-group-addon label-info"></span>
    </div>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-sm-6"><label ><?= $lang['Constr'] ?></label>
      <label id="porcentaje1"></label></div>
    <div class="col-sm-6"><label ><?= $lang['lot'] ?></label>
      <label id="porcentaje2"></label></div>
  </div>
  <div class="row">
    <div class="progress">
      <div id="barra1" class="progress-bar progress-bar-success" >
    </div>
    <div id="barra2" class="progress-bar progress-bar-primary">
    </div>
  </div>
</div>

</div>
  </div>
    </div>
  </div>
</div>
<br>

<script>

function load()
{
  var uno =  parseInt($("#age").text());
  var dos = parseInt($("#aget").text());
  var tres =  document.getElementById('estadoA').textContent;
  var division = uno/dos;
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estadoB').textContent = x;
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded').value;
  var depresiacion = cinco*x*1;
  document.getElementById('estadoD').textContent =  depresiacion.toFixed(2);
  document.getElementById('esda').value =  depresiacion.toFixed(2);
  var total = 0;
  if(cinco == "")
  {
    cinco = 0;
    total = 0;
  }
  else {
    total = x/depresiacion;
    total = total * dos;
    total = dos - total;
    total =  Math.round(total)
  }
  document.getElementById('estadoE').textContent = dos-total;
}
function load2()
{
  document.getElementById('esda2').value = 0;
  valuechange2();
  valuechange3();
  valuechange4();
  valuechange5();
  valuechange6();
  valuechange7();
}
function valuechange()
{
  var uno =  parseInt($("#age").text());
  var dos = parseInt($("#aget").text());
  var tres =  document.getElementById('estadoA').textContent;
  var division = uno/dos;
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estadoB').textContent = x;
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded').value;
  if (cinco <= 0)
  { cinco = 0;
  document.getElementById('unitaryadded').value = '';}
  var depresiacion = cinco*x*1;
  var estreo = <?= $row['areadeconstruc']?>;
  document.getElementById('estadoD').textContent =  depresiacion.toFixed(2);
  var total = 0;
  if(cinco == "")
  {
    cinco = 0;
    total = 0;
  }
  else {
    total = x/depresiacion;
    total = total * dos;
    total = dos - total;
    total =  Math.round(total)
  }
  document.getElementById('estadoE').textContent = total;
  document.getElementById('resultado').textContent = (depresiacion*estreo).toFixed(2);
  chare();
}
function valuechange2()
{
var x = <?= $row['areadeterreno']?>;
var z = document.getElementById('unitaryadded2').value;
if (z < 0)
{ z = 0;
document.getElementById('unitaryadded2').value = 0;}
document.getElementById('esda2').value =  (x * z).toFixed(2);
chare();
}
function valuechange3()
{
  var uno =  parseInt($("#age").text());
  var dos = parseInt($("#aget").text());
  var tres =  document.getElementById('estado2A').textContent;
  var division = uno/dos;
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estado2B').textContent = x;
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded3').value;
  if (cinco <= 0)
  { cinco = 0;
  document.getElementById('unitaryadded3').value = '';}
  var depresiacion = cinco*x*1;
  var estreo = <?= $valorR2 ?>;
  document.getElementById('estado2D').textContent =  depresiacion.toFixed(2);
  var total = 0;
  if(cinco == "")
  {
    cinco = 0;
    total = 0;
  }
  else {
    total = x/depresiacion;
    total = total * dos;
    total = dos - total;
    total =  Math.round(total)
  }
  document.getElementById('estado2E').textContent = total;
  document.getElementById('resultado1').textContent = (depresiacion*estreo).toFixed(2);
  chare();
}
function valuechange4()
{
  var uno =  parseInt($("#age").text());
  var dos = parseInt($("#aget").text());
  var tres =  document.getElementById('estado3A').textContent;
  var division = uno/dos;
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estado3B').textContent = x;
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded4').value;
  if (cinco <= 0)
  { cinco = 0;
  document.getElementById('unitaryadded4').value = 0;}
  var depresiacion = cinco*x*1;
  var estreo = <?= $valorR3 ?>;
  document.getElementById('estado3D').textContent =  depresiacion.toFixed(2);
  var total = 0;
  if(cinco == "")
  {
    cinco = 0;
    total = 0;
  }
  else {
    total = x/depresiacion;
    total = total * dos;
    total = dos - total;
    total =  Math.round(total)
  }
  document.getElementById('estado3E').textContent = total;
  document.getElementById('resultado2').textContent =(depresiacion*estreo).toFixed(2)
  chare();
}
function valuechange5()
{
  var uno =  parseInt($("#age").text());
  var dos = parseInt($("#aget").text());
  var tres =  document.getElementById('estado4A').textContent;
  var division = uno/dos;
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estado4B').textContent = x;
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded5').value;
  if (cinco <= 0)
  { cinco = 0;
  document.getElementById('unitaryadded5').value = 0;}
  var depresiacion = cinco*x*1;
  var estreo = <?= $valorR4 ?>;
  document.getElementById('estado4D').textContent =  depresiacion.toFixed(2);
  var total = 0;
  if(cinco == "")
  {
    cinco = 0;
    total = 0;
  }
  else {
    total = x/depresiacion;
    total = total * dos;
    total = dos - total;
    total =  Math.round(total)
  }
  document.getElementById('estado4E').textContent = total;
  document.getElementById('resultado3').textContent = (depresiacion*estreo).toFixed(2);
  chare();
}
function valuechange6()
{
  var uno =  parseInt($("#age").text());
  var dos = parseInt($("#aget").text());
  var tres =  document.getElementById('estado5A').textContent;
  var division = uno/dos;
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estado5B').textContent = x;
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded6').value;
  if (cinco <= 0)
  { cinco = 0;
  document.getElementById('unitaryadded6').value = 0;}
  var depresiacion = cinco*x*1;
  var estreo = <?= $valorR5 ?>;
  document.getElementById('estado5D').textContent =  depresiacion.toFixed(2);
  var total = 0;
  if(cinco == "")
  {
    cinco = 0;
    total = 0;
  }
  else {
    total = x/depresiacion;
    total = total * dos;
    total = dos - total;
    total =  Math.round(total)
  }
  document.getElementById('estado5E').textContent = total;
  document.getElementById('resultado4').textContent = (depresiacion*estreo).toFixed(2);
  chare();
}
function valuechange7()
{
  var uno =  parseInt($("#age").text());
  var dos = parseInt($("#aget").text());
  var tres =  document.getElementById('estado6A').textContent;
  var division = uno/dos;
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estado6B').textContent = x;
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded7').value;
  if (cinco <= 0)
  { cinco = 0;
  document.getElementById('unitaryadded6').value = 0;}
  var depresiacion = cinco*x*1;
  var estreo = <?= $valorR6 ?>;
  document.getElementById('estado6D').textContent =  depresiacion.toFixed(2);
  var total = 0;
  if(cinco == "")
  {
    cinco = 0;
    total = 0;
  }
  else {
    total = x/depresiacion;
    total = total * dos;
    total = dos - total;
    total =  Math.round(total);
  }
  document.getElementById('estado6E').textContent = total;
  document.getElementById('resultado5').textContent = (depresiacion*estreo).toFixed(2);
  chare();
}
function chare()
{
  var x = parseFloat(document.getElementById('resultado').textContent);
  var x1 = parseFloat(document.getElementById('resultado1').textContent);
  var x2 = parseFloat(document.getElementById('resultado2').textContent);
  var x3 = parseFloat(document.getElementById('resultado3').textContent);
  var x4 = parseFloat(document.getElementById('resultado4').textContent);
  var x5 = parseFloat(document.getElementById('resultado5').textContent);
  document.getElementById('esda').value = (x+x1+x2+x3+x4+x5).toFixed(2);
  barra();
}
function barra()
{
  var x = parseFloat(document.getElementById("esda").value);
  var z = parseFloat(document.getElementById("esda2").value);
  var y = x + z;
  var final1 = 0;
  var final2 = 0;
  if(x == 0){
  }
  else {
   final1 = (x/y)*100;
  }
  if(y == 0)
  {

  }
  else {
    final2 = (z/y)*100;
  }
  document.getElementById('porcentaje1').textContent = Math.round(final1)+"%";
  document.getElementById('porcentaje2').textContent = Math.round(final2)+"%";
  document.getElementById("barra1").style.width = final1+"%";
  document.getElementById("barra2").style.width = final2+"%";
}
</script>
<?php
}
?>
      <!-- Fin de row -->


<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
<script type='text/javascript' src='js/aprobarperi.js'></script>
<script src='js/bootstrap-table.js' type='text/javascript'></script>
</body>

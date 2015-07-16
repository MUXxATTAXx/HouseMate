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
            <label><?= $lang['ages']  ?>:</label>
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
          </div>
      </div>

      <br>
    <ul  class="nav nav-tabs">
        <li id='me' class='negro'><a href='#home' data-toggle='tab'><?=$lang['peri-pendienteobj'];?></a></li>
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
                  <br>
                  <table class='table table-striped table-hover'>
                  <thead>
                    <tr>
                  <th><?= $lang['FE'] ?></th>
                  <th><?=$lang['FD']?></th>
                  </tr>
                </thead>

              </table>
                </div>
              <div class='tab-pane fade' id='home6' >

              <div class="row">
              </div>
              </div>
              <div class='tab-pane fade' id='home7' >
              <div class="row">
              </div>
              </div>
              <div class='tab-pane fade' id='home8' >
              <div class="row">
              </div>
              </div>
              <div class='tab-pane fade' id='home9' >
              <div class="row">
              </div>
              </div>
              <div class='tab-pane fade' id='home10' >
              <div class="row">
              </div>
            </div>
        </div>
<br>

<div class="panel-footer">
  <div class="row">
      <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-6">
      <label><?= $lang['VNRZ'] ?>:</label>
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
  document.getElementById('estadoD').textContent =  Math.round(depresiacion * 1000) / 1000;
  document.getElementById('esda').value =  Math.round(depresiacion * 10000) / 10000;
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
  if (cinco < 0)
  { cinco = 0;
  document.getElementById('unitaryadded').value = 0;}
  var depresiacion = cinco*x*1;
  document.getElementById('estadoD').textContent =  Math.round(depresiacion * 1000) / 1000;
  document.getElementById('esda').value =  Math.round(depresiacion * 100) / 100;
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
}
function valuechange2()
{
var x = <?= $row['areadeterreno']?>;
var z = document.getElementById('unitaryadded2').value;
if (z < 0)
{ z = 0;
document.getElementById('unitaryadded2').value = 0;}
document.getElementById('esda2').value =  x * z;
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

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
  session_start();
  if(isset($_SESSION['tip'])){
  		switch($_SESSION['tip'])
  		{
  			case 1:
  			     include("Header/barranav2.php");
  			break;
  			case 2:
              header('Location: index.php');
  			break;
  			case 3:
               include("Header/barranav3.php");
  			break;
  			case 4:
              header('Location: visitantehomepage.php');
  			break;
  		}
  	}
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
    $quero = mysql_query("Select * FROM etiqueta where IdInmueble = '$empresa' and Netiqueta > '5' and valor <> '0'");
    $quer1 = mysql_query("Select * FROM etiqueta where IdInmueble = '$empresa' and Netiqueta = '6' and valor <> '0'");
    $quer2 = mysql_query("Select * FROM etiqueta where IdInmueble = '$empresa' and Netiqueta = '7' and valor <> '0'");
    $quer3 = mysql_query("Select * FROM etiqueta where IdInmueble = '$empresa' and Netiqueta = '8' and valor <> '0'");
    $quer4 = mysql_query("Select * FROM etiqueta where IdInmueble = '$empresa' and Netiqueta = '9' and valor <> '0'");
    $quer5 = mysql_query("Select * FROM etiqueta where IdInmueble = '$empresa' and Netiqueta = '10' and valor <> '0'");
    while ($row = mysql_fetch_array($query))
    {
      ?>
      <label class="hidme"><?= $row['IdInmueble'] ?></label>
    <br>
      <div class="row">
          <div class="col-sm-4">

            <label><?= $lang['Direccion']  ?>:</label>

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
          <div class="col-xs-2">
            <div class="row row-centered">
            <label ><?= $lang['agev']  ?>:</label>
          </div>
          <div class="row row-centered">
            <label id="aget" class="btn label label-info">65</label>
          </div>

          </div>
          <div class="col-sm-2">
            <div class="row row-centered">
            <label><?= $lang['area2']  ?>:</label>
          </div>
          <div class="row row-centered">
            <label id="areale" class="btn label label-info"><?= $row['areadeconstruc']." m^2"  ?></label>
          </div>
          </div>
          <div class="col-sm-2">
            <div class="row row-centered">
            <label ><?= $lang['area1']  ?>:</label>
          </div>
          <div class="row row-centered">
            <label id="areaterenoF" class="btn label label-info"><?= $row['areadeterreno']." v^2"?></label>
          </div>
          </div>

      </div>
      <br>
      <div class="col-sm-12">
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
    </ul></div>
    <div id='myTabContent' class='tab-content'>
                <!--Inmuebles-->
                <div class='tab-pane fade active in' id='home'>
                  <div class="row row-centered"><center>
                    <div class="col-sm-6 col-centered">
                      <div class="row row-centered">
                        <div class="col-sm-6 col-centered">
                        <label><?= $lang['VU'] ?> (<?= $lang['Constr'] ?>):</label>
                          <div class="input-group">
                          <span class="input-group-addon label-info">$</span>
                        <input class="form-control" type="number" id="unitaryadded" onkeypress="return deci(event);"  onchange="valuechange();">
                          <span class="input-group-addon label-info"></span>
                        </div>
                        </div>

                      </div>
                    </div>
                    <div class="col-sm-6 col-centered">
                      <div class="row row-centered">
                        <div class="col-sm-6 col-centered">
                        <label><?= $lang['VU'] ?> (<?= $lang['lot'] ?>):</label>
                          <div class="input-group">
                          <span class="input-group-addon label-info">$</span>
                        <input class="form-control" type="number"  id="unitaryadded2" onkeypress="return deci(event);" onchange="valuechange2();">
                          <span class="input-group-addon label-info"></span>
                        </div>
                        </div>
                      </div>
                    </div></center>
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
                      <td class="row btn btn-sm "><label id="estado1D">0</label></td>
                      <td class="row btn btn-sm "><label id="estadoE"></label></td>
                  </tr>
                  </table>
                    <div class="col-sm-6">
                    <label><?=$lang['denor']  ?></label><label id="resultado" >0</label>
                  </div>
                  <br>

                </div>
          <?php    //   include "Call/Funciones/tagsinternos.php" ?>
<!--Home 6--><div class='tab-pane fade' id='home6' >
                <div class="row">
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-6">
                      <label><?= $lang['VU'] ?> (<?= $lang['Constr'] ?>):</label>
                        <div class="input-group">
                        <span class="input-group-addon label-info">$</span>
                      <input class="form-control" type="number" id="unitaryadded3" onkeypress="return deci(event);"  onchange="valuechange3()">
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
                          <label id="valor1" class="btn label label-info"><?php while($row2 = mysql_fetch_array($quer1))
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
                      <input class="form-control" type="number" id="unitaryadded4" onkeypress="return deci(event);"  onchange="valuechange4()">
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
              <input class="form-control" type="number" id="unitaryadded5" onkeypress="return deci(event);"  onchange="valuechange5()">
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
                <input class="form-control" type="number" id="unitaryadded6" onkeypress="return deci(event);"  onchange="valuechange6()">
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
                <input class="form-control" type="number" id="unitaryadded7" onkeypress="return deci(event);"  onchange="valuechange7()">
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

  <div class="row row-centered">
    <div class="col-sm-2"></div>
  <div class="col-sm-5 col-centered">
    <div class="row">
      <div class="col-sm-6">
      <label><?= $lang['builvalue'] ?>:</label>
    </div>

  </div>
    <div class="col-sm-6 col-centered">
      <div class="input-group"><h3>
      <span class="input-group-addon btn label label-info">$</span>
    <label class="input-group btn label label-info"  id="esda"></label>
      <span class="input-group-addon label label-info"></span></h3>
    </div>
    </div>
  </div>
  <div class="col-sm-5 col-centered">
    <div class="row">
      <div class="col-sm-6 col-centered">
      <label><?= $lang['lotvalue'] ?>:</label>
    </div>
  </div>
    <div class="col-sm-6 col-centered">
      <div class="input-group"><h3>
      <span class="input-group-addon btn label label-info">$</span>
    <label class="input-group btn label label-info"  id="esda2"></label>
      <span class="input-group-addon label label-info"></span></h3>
    </div>
    </div>
  </div>
  </div>
<span id="validacion-num1" class="label label-warning"></span>
  <br>

  <div class="row">
    <div class="col-sm-6"><label ><?= $lang['Constr'] ?></label>
      <label id="porcentaje1"></label></div>
    <div class="col-sm-6"><label ><?= $lang['lot'] ?></label>
      <label id="porcentaje2"></label></div>
  </div>
  <div class="row">
    <div class="progress">
      <div id="barra1" class="progress-bar progress-bar-primary" >
    </div>
    <div id="barra2" class="progress-bar progress-bar-success">
    </div>
  </div>
</div>

<div id="recdje"></div>
<table class='table whitecover' data-toggle='table'   data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='false'>
<thead>
<tr class="label-info " style="color:black; align:center;">
<th class="centerme"><?= $lang['Nombre'] ?></th>
<th class="centerme"><?= $lang['are']  ?></th>
<th class="centerme"><?= $lang['VNR'] ?></th>
<th class="centerme">Total</th>
</tr>
</thead>

<tbody id="tablameter" style="color:black;">
</tbody>
 <tfoot>
   <tr id="especial-1" style="color:black;" class="hidme">
     <td><?=$lang['Constr'] ?></td><td id="Atabla-1" class="progress-bar progress-bar-primary"></td><td class="progress-bar progress-bar-primary" id="Btabla-1"></td><td class="progress-bar progress-bar-primary" id="Ctabla-1"></td>
   </tr>
<tr id="tablaterreno" style="color:black;" class="hidme">
  <td ><?= $lang['lot'] ?></td>
  <td class="progress-bar progress-bar-success"><label id="areadeterreno"></label></td>
  <td class="progress-bar progress-bar-success"><label id="valorporterreno"></label></td>
  <td class="progress-bar progress-bar-success"><label id="totalterreno"></label></td>
</tr>
<tr>
  <td class="progress-bar progress-bar-info"></td>
  <td class="progress-bar progress-bar-info"></td>
  <td class="progress-bar progress-bar-info">Total:</td>
  <td style="color:black; align:center;"><center><label id="valorfinal"></label></center></td>
</tr>
</tfoot>
</table>
<br>
<div class="col-sm-10"></div>
<div class="col-sm-2 col-centered"><a  name="funcionar" id="funcionar" class="btn btn-sm btn-warning"><?= $lang['insert'] ?></a></div>
<br>
</div>
  </div>
    </div>
  </div>

</div>
<br>

<script type="text/javascript">
function load()
{
  var uno =  parseInt($("#age").text());
  var dos = parseInt($("#aget").text());
  var tres =  document.getElementById('estadoA').textContent;
  var division = Math.pow(uno/dos,1.4);
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estadoB').textContent = x.toFixed(2);
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded').value;
  var depresiacion = cinco*x*1;
  document.getElementById('estado1D').textContent =  depresiacion.toFixed(2);
  document.getElementById('esda').textContent =  depresiacion.toFixed(2);
  document.getElementById('valorfinal').textContent = document.getElementById('esda').textContent;
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
  document.getElementById('estadoE').textContent = dos-total;
}
function load2()
{
  document.getElementById('esda2').textContent = 0;
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
  var division = Math.pow(uno/dos,1.4);
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estadoB').textContent = x.toFixed(2);
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded').value;
  if (cinco <= 0)
  { cinco = 0;
  document.getElementById('unitaryadded').value = '';}
  var depresiacion = cinco*x*1;
  var estreo = <?= $row['areadeconstruc']?>;
  document.getElementById('estado1D').textContent =  depresiacion.toFixed(2);
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
document.getElementById('esda2').textContent =  (x * z).toFixed(2);
chare();
formstart();
}
function formstart()
{
  var x = parseFloat(document.getElementById("unitaryadded2").value);
  var z = document.getElementById('areaterenoF').textContent;
  var y = document.getElementById('esda2').textContent;
  if(x != 0 && x != 0.00 && x != null && x > 0){
    document.getElementById('areadeterreno').textContent = z;
    document.getElementById('valorporterreno').textContent = x;
    document.getElementById('totalterreno').textContent = y;
    document.getElementById("tablaterreno").className = "";
  }
  else {
    document.getElementById("tablaterreno").className = "hidme";
  }
}
function valuechange3()
{
  var uno =  parseInt($("#age").text());
  var dos = parseInt($("#aget").text());
  var tres =  document.getElementById('estado2A').textContent;
  var division = Math.pow(uno/dos,1.4);
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estado2B').textContent = x.toFixed(2);
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded3').value;
  if (cinco <= 0)
  { cinco = 0;
  document.getElementById('unitaryadded3').value = '';}
  var depresiacion = cinco*x*1;
  var estreo = <?php if(isset($valorR2))
  echo $valorR2;
  else echo 0 ?>;
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
    total =  Math.round(total);
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
  var division = Math.pow(uno/dos,1.4);
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estado3B').textContent = x.toFixed(2);
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded4').value;
  if (cinco <= 0)
  { cinco = 0;
  document.getElementById('unitaryadded4').value = '';}
  var depresiacion = cinco*x*1;
  var estreo = <?php if(isset($valorR3))
  echo $valorR3;
  else echo 0 ?>;
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
    total =  Math.round(total);
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
  var division = Math.pow(uno/dos,1.4);
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estado4B').textContent = x.toFixed(2);
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded5').value;
  if (cinco <= 0)
  { cinco = 0;
  document.getElementById('unitaryadded5').value = '';}
  var depresiacion = cinco*x*1;
  var estreo = <?php if(isset($valorR4))
  echo $valorR4;
  else echo 0 ?>;
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
    total =  Math.round(total);
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
  var division = Math.pow(uno/dos,1.4);
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estado5B').textContent = x.toFixed(2);
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded6').value;
  if (cinco <= 0)
  { cinco = 0;
  document.getElementById('unitaryadded6').value = '';}
  var depresiacion = cinco*x*1;
  var estreo = <?php if(isset($valorR5))
  echo $valorR5;
  else echo 0 ?>;
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
    total =  Math.round(total);
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
  var division = Math.pow(uno/dos,1.4);
  var multiplicacion = division * tres;
  var x = 1-multiplicacion;
  document.getElementById('estado6B').textContent = x.toFixed(2);
  // Parte dos de la lógica
  var cinco = document.getElementById('unitaryadded7').value;
  if (cinco <= 0)
  { cinco = 0;
  document.getElementById('unitaryadded6').value = '';}
  var depresiacion = cinco*x*1;
  var estreo = <?php if(isset($valorR6))
  echo $valorR6;
  else echo 0 ?>;
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
  var pisto = parseFloat(document.getElementById("esda2").textContent);
  document.getElementById('esda').textContent = (x+x1+x2+x3+x4+x5).toFixed(2);
  document.getElementById('valorfinal').textContent = "$"+(parseFloat(document.getElementById('esda').textContent)+parseFloat(pisto)).toFixed(2);
  barra();
  changemaker();
}
function barra()
{
  var x = parseFloat(document.getElementById("esda").textContent);
  var z = parseFloat(document.getElementById("esda2").textContent);
  var y = x + z;
  var final1 = 0;
  var final2 = 0;
  if(x == 0){
  }
  else {
   final1 = (x/y)*100;
  }
  if(y == 0){
  }
  else {
    final2 = (z/y)*100;
  }
  document.getElementById('porcentaje1').textContent = Math.round(final1)+"%";
  document.getElementById('porcentaje2').textContent = Math.round(final2)+"%";
  document.getElementById("barra1").style.width = final1+"%";
  document.getElementById("barra2").style.width = final2+"%";
}
function changemaker() {
  $.ajax({
    type: "POST",
    url: "Call/Funciones/valuotabla.php",
    data: "",
    dataType: "html",
    beforeSend: function(){
      $("#tablameter").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
    },
    error: function(){
      alert("error petición ajax");
    },
    success: function(data){
      $("#tablameter").empty();
      $("#tablameter").append(data).page;
      formacion();
  }
});}
function formacion()
{
  var gete1 = "";
  var gete2 = "";
  var gete3 = "";
  var uno ="";
  var dos ="";
  var tres ="";
  var compel = "";
  var watchdog ="";
  var goget = "";
  var other = "";
  var dona = "";
  var logot = "";
  var counter = -2;
  for(var ve = 0; ve <= 5;ve++)
  {
      counter++;
      if(ve == 0)
      {
        gete1 = "Atabla"+(ve-1);
        gete2 = "Btabla"+(ve-1);
        gete3 = "Ctabla"+(ve-1);
        logot = "resultado";
        dona = document.getElementById("areale").textContent;
      }
      else {
        gete1 = "Atabla"+counter;
        gete2 = "Btabla"+counter;
        gete3 = "Ctabla"+counter;
        logot = "resultado"+ve;
        dona = "valor"+ve;
        dona = document.getElementById(dona).textContent;
      }
      goget = "estado"+(ve+1)+"D";


    other = document.getElementById(logot).textContent;
    watchdog = document.getElementById(goget).textContent;
    if(watchdog == "0" || watchdog == null || watchdog == "0.00")
    {}
    else {
        if(ve == 0)
        {
       compel = "especial"+(ve-1);}
       else {
         compel = "especial"+(counter);
       }
       document.getElementById(gete1).textContent = dona;
       document.getElementById(gete2).textContent = watchdog;
       document.getElementById(gete3).textContent = other;
       document.getElementById(compel).className = "";
    }
  }
}
$("#funcionar").click(function(){
		var valor = document.getElementById('esda').textContent;
		var valor2 = document.getElementById('esda2').textContent;
    var inmueble = <?= $_GET['super']; ?>;
    var geting = document.getElementById('estadoE').textContent;
		$.ajax({
			type: "POST",
			url: "Call/Funciones/valuofinal.php",
			data: "valor="+valor+"&valor2="+valor2+"&inmueble="+inmueble+"&geting="+geting,
			dataType: "html",
			beforeSend: function(){
				$("#recdje").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");
			},
			error: function(){
				alert("error petición ajax");
			},
			success: function(data){
				$("#recdje").empty();
				$("#recdje").append(data).page;
		}
	});
});
</script>
<?php
}
?>

      <!-- Fin de row -->


<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
<script type='text/javascript' src='js/aprobarperi.js'></script>
<script src='js/bootstrap-table.js' type='text/javascript'></script>
<script src="js/validaciones.js" type="text/javascript"></script>
</body>

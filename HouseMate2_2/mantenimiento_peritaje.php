<!DOCTYPE HTML>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
<?php
    session_start();
	switch($_SESSION['tip'])
	{
		case 1:
		include("Header/barranav2.php");
		break;
		case 2:
		break;
		case 3:
        include("Header/barranav3.php");
		break;
		case 4:
		include("Header/barranav6.php");
		break;
	}
?>
<html>
<head>	
	<title>House Mate</title>
	<meta charset = "utf-8" />
</head>
<body>
<br>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >
    <div class="panel panel-info">
            <ul  class="nav nav-tabs">
                <li id='me' class='active negro'><a href='#home' data-toggle='tab'><?php echo $lang['VP'];?></a></li>
                <li id='me2' class='negro'><a href='#home2' data-toggle='tab'><?php echo $lang['TS'];?></a></li>
                <li id='me3' class='negro'><a href='#home3' data-toggle='tab'><?php echo $lang['TT'];?></a></li>
                <li id='me4' class='negro'><a href='#home4' data-toggle='tab'><?php echo $lang['DC'];?></a></li>
                <li id='me5' class='negro'><a href='#home5' data-toggle='tab'><?php echo $lang['peri-local'];?></a></li>
            </ul>
        <div class="panel-body">
            <form action="mantenimiento_peritaje.php" method="POST">
            <div id='myTabContent' class='tab-content'>
                <div class='tab-pane fade active in' id='home'>
<!--Paredes-->
                        <center>
                                <br>
                                <div class="row">
                                        <div class="col col-sm-2">
                                            <center><label><?php echo $lang['peri-pared'];?></label></center>
                                        </div>
                                        <div class="col col-sm-4">
                                            <input name="nombre-pared" class="form-control" type="text">
                                        </div>
                                        <div class="col col-sm-1">
                                            <center><label><?php echo $lang['peri-valor'];?></label></center>
                                        </div>
                                        <div class="col col-sm-2">
                                            <input name="valor-pared" class="form-control" type="text">
                                        </div>
                                        <div class="col col-sm-3">
                                            <a class="btn btn-primary" data-toggle="modal" data-target="#myModal2"><?php echo $lang['peri-agregar'];?></a>
                                        </div>
                                </div>
                                <br>
                            <div class="panel-footer">
                                <div class="row row-centered">
                                    <div class="col col-sm-8">
                                        <table data-toggle='table' id='here' class='table table-striped table-hover negro'>
                                              <thead>
                                                <tr>
                                                    <th><center>#</center></th>
                                                    <th><center><?php echo $lang['peri-pared'];?></center></th>
                                                    <th><center><?php echo $lang['peri-valor'];?></center></th>
                                                </tr>
                                              </thead>
                                                <tbody>
                                                <?php
                                                        $desc = mysql_query("SELECT * FROM peritaje WHERE categoria ='1'");
                                                        while($row = mysql_fetch_array($desc)){
                                                        echo "<tr>
                                                            <td>".$row['id_peri']."</td>
                                                            <td>".$row['nombre']."</td>
                                                            <td>".$row['valor1']."</td>
                                                        </tr>";
                                                        }
                                                ?>
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </center>
                </div>
<!--Suelo-->
                <div class='tab-pane fade' id='home2'>
                        <center>
                                <br>
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <center><label><?php echo $lang['peri-suelo'];?></label></center>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col col-sm-2">
                                        <center><label><?php echo $lang['peri-valor'];?></label></center>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <br>
                            <div class="panel-footer">
                                <center><a class ="btn btn-primary"><?php echo $lang['peri-agregar'];?></a></center>
                            </div>
                        </center>
                </div>
<!--Techo-->
                <div class='tab-pane fade' id='home3'>
                        <center>
                                <br>
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <center><label><?php echo $lang['peri-techo'];?></label></center>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col col-sm-2">
                                        <center><label><?php echo $lang['peri-valor'];?></label></center>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <br>
                            <div class="panel-footer">
                                <center><a class ="btn btn-primary"><?php echo $lang['peri-agregar'];?></a></center>
                            </div>
                        </center>
                </div>
<!--Descripcion constructiva-->
                <div class='tab-pane fade' id='home4'>
                        <center>
                                <br>
                                <div class="row">
                                    <div class="col col-sm-3">
                                        <center><label><?php echo $lang['DC'];?></label></center>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col col-sm-2">
                                        <center><label><?php echo $lang['peri-valor'];?></label></center>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <br>
                            <div class="panel-footer">
                                <center><a class ="btn btn-primary"><?php echo $lang['peri-agregar'];?></a></center>
                            </div>
                        </center>
                </div>
<!--Localizacion-->
                <div class='tab-pane fade' id='home5'>
                        <center>
                                <br>
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <center><label><?php echo $lang['peri-muni'];?></label></center>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col col-sm-2">
                                        <center><label><?php echo $lang['peri-valor'];?></label></center>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <br>
                            <div class="panel-footer">
                                <center><a class ="btn btn-primary"><?php echo $lang['peri-agregar'];?></a></center>
                            </div>
                        </center>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    
<!--Modal-->
<div id="myModal2" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button>   
        <h4 class="modal-title"><?php echo $lang['peri-modal1'];?></h4>
      </div>
      <div class="modal-body">
        <input type="submit" value="<?php echo $lang['peri-modal3'];?>" class="btn btn-primary" name="confirmar">
		<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['peri-modal2'];?></button>
        <?php
            if(isset($_POST['confirmar'])){
                include "Call/Funciones/Peritaje.php";
            }
        ?>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>
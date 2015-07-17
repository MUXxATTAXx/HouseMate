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
            <input id="nombre_pared" class="form-control" type="text">
        </div>
        <div class="col col-sm-1">
            <center><label><?php echo $lang['peri-valor'];?></label></center>
        </div>
        <div class="col col-sm-2">
            <input id="valor_pared" class="form-control" type="text">
        </div>
        <div class="col col-sm-3">
            <button type="button" class="btn btn-default" id="confirmar"><?=$lang['peri-agregar']?></button>
        </div>
        <div id="mesangemostra"></div>
    </div>
    <br>
    <div class="panel-footer">
        <div class="row row-centered">
            <div class="col col-sm-8">
                <!--Tabla-->
                <div id="mostrar1"></div>
            </div>
        </div>
    </div>
</center>
                </div>
<!--Suelo-->
                <div class='tab-pane fade' id='home2'>
                        <center>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <center><label><?php echo $lang['peri-suelo'];?></label></center>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input id="nombre_suelo" class="form-control" type="text">
                                    </div>
                                    <div class="col col-sm-1">
                                        <center><label><?php echo $lang['peri-valor'];?></label></center>
                                    </div>
                                    <div class="col col-sm-2">
                                        <input id="valor_suelo" class="form-control" type="text">
                                    </div>
                                    <div class="col col-sm-3">
                                        <button type="button" class="btn btn-default" id="confirmar2"><?=$lang['peri-agregar']?></button>
                                    </div>
                                    <div id="mesangemostra2"></div>
                                </div>
                                <br>
                            <div class="panel-footer">
                                <div class="row row-centered">
                                    <div class="col col-sm-8">
                                        <!--Tabla-->
                                        <div id="mostrar2"></div>
                                    </div>
                                </div>
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
                                        <input id="nombre_techo" class="form-control" type="text">
                                    </div>
                                    <div class="col col-sm-2">
                                        <center><label><?php echo $lang['peri-valor'];?></label></center>
                                    </div>
                                    <div class="col col-sm-2">
                                        <input id="valor_techo" class="form-control" type="text">
                                    </div>
                                    <div class="col col-sm-1">
                                        <button type="button" class="btn btn-default" id="confirmar3"><?=$lang['peri-agregar']?></button>
                                    </div>
                                    <div id="mesangemostra3"></div>
                                </div>
                                <br>
                            <div class="panel-footer">
                                <!--Tabla-->
                                <div id="mostrar3"></div>
                            </div>
                        </center>
                </div>
<!--Descripcion constructiva-->
                <div class='tab-pane fade' id='home4'>
                        <center>
                                <br>
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <center><label><?=$lang['DC'];?></label></center>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input id="nombre_constru" class="form-control" type="text">
                                    </div>
                                    <div class="col col-sm-2">
                                        <center><label><?=$lang['peri-valor'];?></label></center>
                                    </div>
                                    <div class="col col-sm-2">
                                        <input id="valor_constru" class="form-control" type="text">
                                    </div>
                                    <div class="col col-sm-1">
                                        <button type="button" class="btn btn-default" id="confirmar4"><?=$lang['peri-agregar']?></button>
                                    </div>
                                    <div id="mesangemostra4"></div>
                                </div>
                                <br>
                            <div class="panel-footer">
                                <!--Tabla-->
                                <div id="mostrar4"></div>
                            </div>
                        </center>
                </div>
<!--Localizacion-->
                <div class='tab-pane fade' id='home5'>
                        <center>
                                <br>
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <center><label><?=$lang['peri-muni'];?></label></center>
                                    </div>
                                    <div class="col col-sm-4">
                                        <?php
                                          include "Call/Funciones/select.php";
                                        ?>
                                    </div>
                                    <div class="col col-sm-1">
                                        <center><label><?=$lang['tipo-local'];?></label></center>
                                    </div>
                                    <div class="col col-sm-2">
                                        <input id="valor_local1" class="form-control" placeholder="<?=$lang['peri-centro']?>" type="text">
                                        <input id="valor_local2" class="form-control" placeholder="<?=$lang['peri-priva']?>" type="text">
                                        <input id="valor_local3" class="form-control" placeholder="<?=$lang['peri-nopriva']?>" type="text">
                                    </div>
                                    <div class="col col-sm-1">
                                        <button type="button" class="btn btn-default" id="confirmar5"><?=$lang['peri-agregar']?></button>
                                    </div>
                                    <div id="mesangemostra5"></div>
                                </div>
                                <br>
                            <div class="panel-footer">
                                <!--Tabla-->
                            <div id="mostrar5"></div>
                            </div>
                        </center>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<script href="js/jquery-1.11.2.min.js"></script>
<script src="js/peritaje.js" type="text/javascript"></script>
<script src="js/peritaje2.js" type="text/javascript"></script>
<script src="js/peritaje3.js" type="text/javascript"></script>
<script src="js/peritaje4.js" type="text/javascript"></script>
<script src="js/peritaje5.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.chained.js" charset="utf-8"></script>
<script>
$("#Municipio").chained("#Departamento");
</script>
</body>
</html>

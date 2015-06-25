<!DOCTYPE HTML>
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
	   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
</head>
<body>
<br>
<center>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 toppad col-centered" >
        <div class="panel panel-info">
            <div class="panel-heading">
                <h2 class="panel-title"><center>Valuar Inmueble</center></h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col col-sm-4">
                        <p>Dueño</p>
                    </div>
                    <div class="col col-sm-4">
                        <select name="dueno" class="checbocks" disabled>
                            <option selected>Holi</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-2">
                        <center>&Aacute;rea Terreno</center>
                    </div>
                    <div class="col col-sm-4">
                        <input type="number" class="form-control" placeholder="&Aacute;rea Terreno">
                    </div>
                    <div class="col col-sm-2">
                        <center>&Aacute;rea Construccion</center>
                    </div>
                    <div class="col col-sm-4">
                        <input type="number" class="form-control" placeholder="&Aacute;rea Construccion">
                    </div>
				</div>
                <br>
                <div class="row">
                    <div class="col col-sm-2">
                        <center>Paredes</center>
                    </div>
                    <div class="col col-sm-4">
                        <select class="form-control">
                            <option value="0">Paredes</option>
                            <option>Repelladas</option>
                            <option>Afinadas</option>
                            <option>Pintadas</option>
                            <option>Enchape de Ceramica</option>
                            <option>Marmol</option>
                            <option>Prefabricado</option>
                            <option>Sisadas</option>
                        </select>
                    </div>
                    <div class="col col-sm-2">
                        <center>Tipo Suelo</center>
                    </div>
                    <div class="col col-sm-4">
                        <select class="form-control">
                            <option value="0">Tipo Suelo</option>
                            <option>Cemento</option>
                            <option>Terrazo</option>
                            <option>Ceramica</option>
                            <option>Porcelanato</option>
                        </select>
                    </div>
				</div>
                <br>
                <div class="row">
                    <div class="col col-sm-2">
                        <center>Niveles</center>
                    </div>
                    <div class="col col-sm-4">
                        <select class="form-control">
                            <option value="0">Niveles</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="col col-sm-2">
                        <center>Descripcion Constructiva</center>
                    </div>
                    <div class="col col-sm-4">
                        <select class="form-control">
                            <option value="0">Descripcion Constructiva</option>
                            <option>Mixta</option>
                            <option>Concreto</option>
                            <option>Adobe</option>
                            <option>Metalica</option>
                        </select>
                    </div>
				</div>
                <br>
                <div class="row">
                    <div class="col col-sm-2">
                        <center>Localizacion</center>
                    </div>
                    <div class="col col-sm-6">
                        <select class="form-control">
                            <option value="1">Privado</option>
                            <option value="2">No Privado</option>
                            <option value="3">Centro</option>
                        </select>
                    </div>
				</div>
                <br>
            </div>
            <div class="panel-footer">
                <center><a class ="btn btn-primary">Valuar</a></center>
            </div>
        </div>
    </div>
</center>
</body>
</html>
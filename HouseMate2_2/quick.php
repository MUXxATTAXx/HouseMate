<head>
	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
    <title>Inicio</title>
<?php
    echo("
<meta charset=utf-8 />
    ");
	session_start();
	$variable1 = $_SESSION["user"];
	$variable2 = $_SESSION['id'];
	$variable3 = $_SESSION['tip'];
	switch($variable3)
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
</head>
<body id="intro">

<div id="homepage">

    <div class="negro" id="largo">

        <div class="row row-centered">
					<div class="col-sm-4"><h2>QuickFinder</h2></div>
					<div class="col-sm-2"></div>
            <div class="col-sm-8">
                <?php include "Call/Funciones/select2.php" ?>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-sm-4 negro">
			<br>
           <div class="row row-centered">
						 <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label"><?php echo $lang['Precio-Max']; ?></label><span class="label label-danger" id="validacion-num1"></span>
                      <div class="input-group">
                        <span class="input-group-addon  label-primary">$</span>
                        <input id="busqueda" onchange="creator()" onkeypress="return num(event)" type="text"  class="form-control">
                      </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p><?php echo $lang['Tipo-Transa']; ?></p>
                    <select id="select" onchange="creator()" class="form-control">
                        <option selected></option>
                        <option value="1"><?php echo $lang['Venta'];?></option>
                        <option value="2"><?php echo $lang['Renta'];?></option>
                    </select>
                </div>
							</div>
                <div class="col-sm-6 col-centered">
                    <br>
                    <p><?php echo $lang['Tipo-Prop']; ?></p>
                    <select id="realstate" onchage="creator()" class="form-control">
                        <option selected></option>
                        <option value="1"><?php echo $lang['Urbana'];?></option>
                        <option value="2"><?php echo $lang['Rustico'];?></option>
                    </select>
                </div>
								<div class="col-sm-6 col-centered">
									<div class="[ form-group ]">
							      <label><?php echo $lang['peritada'] ?>:</label><input onchange="creator()" type="checkbox" name="fancy-checkbox-primary-custom-icons" id="fancy-checkbox-primary-custom-icons" autocomplete="off" value="1"/>
							      <div class="[ btn-group ]">
							        <label for="fancy-checkbox-primary-custom-icons" class="[ btn btn-primary ]">
							          <span class="[ glyphicon glyphicon-ok ]"></span>
							          <span class="[ glyphicon glyphicon-minus ]"></span>
							        </label>

							      </div>
							    </div>
								</div>
            </div>
            <div class="row">
                <hr>
            </div>
            <div class="row row-centered">
                <p><?php echo $lang['Etiqueta']; ?></p>
                <div class="row row-centered">
                    <div class="col-sm-4 col-centered">
                        <input id="input1" onkeypress='return event.charCode >= 48 && event.charCode <= 57' onchange="creator ()" placeholder="<?php echo$lang['Cuartos']; ?>" type="text" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input id="input2" onkeypress='return event.charCode >= 48 && event.charCode <= 57' onchange="creator ()" placeholder="<?php echo $lang['Salas']; ?>" type="text" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input id="input3"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' onchange="creator ()" placeholder="<?php echo $lang['Cocinas']; ?>" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 col-centered">
                         <input id="input4" onkeypress='return event.charCode >= 48 && event.charCode <= 57' onchange="creator ()" placeholder="<?php echo $lang['Baños']; ?>" type="text" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input id="input5" onkeypress='return event.charCode >= 48 && event.charCode <= 57' onchange="creator ()" placeholder="<?php echo $lang['Comedores']; ?>" type="text" class="form-control">
                    </div>
                </div>
                <br>

            </div>
        <br>
	</div>

	<div id="dontover" class="col-sm-8">
        <div id="resultado"></div>
	</div>
	</div>
		<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
		 <script type="text/javascript" src="js/jquery.chained.js" charset="utf-8"></script>
		<script>

		$(document).ready(function(){
		$("#busqueda").focus();
		$("#Municipio2").chained("#Departamento2");
	});
        function creator () {
					var consulta = $("#busqueda").val();
					var select = $("#select").val();
					var lugar = $("#Departamento2").val();
					var realstate = $("#realstate").val();
					var get1 = $("#input1").val();
					var get2 = $("#input2").val();
					var get3 = $("#input3").val();
					var get4 = $("#input4").val();
					var get5 = $("#input5").val();

					if(lugar != "")
					{
					var condominio = $("#Municipio2").val();
					var fuse = condominio+", "+lugar+", El Salvador";}
					else {
						fuse = "";
					}
					if (document.getElementById('fancy-checkbox-primary-custom-icons').checked) {
            var peritado = "1";
        	} else {
            var peritado = "0";
        	}
					//hace la búsqueda

					$.ajax({
								type: "POST",
								url: "Call/Funciones/Busqueda/buscar.php",
								data: "a="+consulta+"&b="+select+"&fuse="+fuse+"&perito="+peritado+"&type="+realstate+"&get1="+get1+"&get2="+get2
								+"&get3="+get3+"&get4="+get4+"&get5="+get5,
								dataType: "html",
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){
                          $("#resultado").empty();
                          $("#resultado").append(data);
							}
					  });
				}



		</script>
</div>
<script src="js/validaciones.js" type="text/javascript"></script>
</body>

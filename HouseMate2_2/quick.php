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
                <?php include "Call/Funciones/select3.php" ?>
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
                        <input id="busqueda" onkeypress="return num(event)" type="text"  class="form-control">
                      </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p><?php echo $lang['Tipo-Transa']; ?></p>
                    <select id="select" class="form-control">
                        <option selected></option>
                        <option value="1"><?php echo $lang['Venta'];?></option>
                        <option value="2"><?php echo $lang['Renta'];?></option>
                    </select>
                </div>
							</div>
                <div class="col-sm-10 col-centered">
                    <br>
                    <p><?php echo $lang['Tipo-Prop']; ?></p>
                    <select class="form-control">
                        <option selected></option>
                        <option value="1"><?php echo $lang['Urbana'];?></option>
                        <option value="2"><?php echo $lang['Rustico'];?></option>
                    </select>
                </div>
            </div>
            <div class="row">
                <hr>
            </div>
            <div class="row row-centered">
                <p><?php echo $lang['Etiqueta']; ?></p>
                <div class="row row-centered">
                    <div class="col-sm-4 col-centered">
                        <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="<?php echo$lang['Cuartos']; ?>" type="text" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="<?php echo $lang['Salas']; ?>" type="text" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="<?php echo $lang['Cocinas']; ?>" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 col-centered">
                         <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="<?php echo $lang['Baños']; ?>" type="text" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="<?php echo $lang['Comedores']; ?>" type="text" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="<?php echo $lang['Jardines']; ?>" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 col-centered">
                         <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="<?php echo $lang['Cocheras']; ?>" type="text" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="<?php echo $lang['Terraza']; ?>" type="text" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="<?php echo $lang['Sotanos']; ?>" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row row-centered">
                    <div class="col-sm-4 col-centered">
                         <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="<?php echo $lang['Piscinas']; ?>" type="text" class="form-control">
                    </div>
                </div>
            </div>
        <br>
	</div>

	<div id="dontover" class="col-sm-8">
        <div id="resultado"></div>
	</div>
	</div>
		<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
		<script>
		$(document).ready(function(){

        var consulta;

         //hacemos focus al campo de búsqueda
        $("#busqueda").focus();
		});
        //comprobamos si se pulsa una tecla
        $("#busqueda").keyup(function(e){

              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#busqueda").val();
              select = $("#select").val();
              //hace la búsqueda

              $.ajax({
                    type: "POST",
                    url: "Call/Funciones/Busqueda/buscar.php",
                    data: "b="+consulta+"&c="+select,
                    dataType: "html",
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){
                          $("#resultado").empty();
                          $("#resultado").append(data);
							}
					  });
				});
			$('#select').on('change', function() {
				//obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#busqueda").val();
              select = $("#select").val();
              //hace la búsqueda

              $.ajax({
                    type: "POST",
                    url: "Call/Funciones/Busqueda/buscar.php",
                    data: "b="+consulta+"&c="+select,
                    dataType: "html",

                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){
                          $("#resultado").empty();
                          $("#resultado").append(data);

							}
					  });

			});


		</script>
</div>
<script src="js/validaciones.js" type="text/javascript"></script>
</body>

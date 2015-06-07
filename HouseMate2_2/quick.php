<head>
	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>	
   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
    <link href='css/estilo.css' rel='stylesheet'/>
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
<a class="btn btn-sm btn-primary"><?php echo $lang['quick'] ?></a>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-body">
		<div class="row">
			<div class="col-xs-4"> 
			<label><?php echo $lang['Precio']?>:</label>
		<div class="input-group">
			 <span class="input-group-addon black">$</span>
			 <input id="busqueda" onkeypress="return num(event)" type="number" class='form-control' min="0" step="1"  placeholder='<?php echo $lang['Precio']?>'>
			 <span class="input-group-addon black">.00</span>
		  </div>
			</div>
			<div class="col-xs-4"> 
			<label><?php echo $lang['vr'] ?>:</label>
				<select id="select" class="form-control" >
				<?php
					echo "<option value='0'>".$lang['Nada']."</option>
						<option value='1'>".$lang['Venta']."</option>
						<option value='2'>".$lang['Renta']."</option>";
				?>
				</select>
			</div>
		</div>
<div id="resultado"></div>

        </div>
    </div>      
</div>


		
		<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
		<script>
		$(document).ready(function(){
                                
        var consulta;
                                                                          
         //hacemos focus al campo de búsqueda
        $("#busqueda").focus();
                                                                                                    
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
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultado").html("<p align='center'><img src='ajax-loader.gif' /></p>");
                    },
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
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultado").html("<p align='center'><img src='ajax-loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resultado").empty();
                          $("#resultado").append(data);
                                                             
							}
					  });
			  
			});
																		   
		});
		</script>
<div id="homepage9">
    <div id="barrabusqueda9">
        <br>
        <div class="row row-centered">
            <div class="col-sm-2 col-centered">
                <label><?php echo $lang['Buscar']; ?></label>
            </div>
            <div class="col-sm-6 col-centered">
                <input placeholder="<?php echo $lang['Buscar2']; ?>" class="form-control input-sm" type="text" id="inputSmall">
            </div>
        </div>
        <br>
    </div>
    <div id="BarraLateral9">
           <div class="row row-centered">
                <div class="row">
                    <hr>
                </div>
                <div class="col-sm-10 col-centered">
                    <div class="form-group">
                      <label class="control-label"><?php echo $lang['Precio-Max']; ?></label>
                      <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                </div>
                <div class="col-sm-10 col-centered">
                    <br>
                    <p><?php echo $lang['Tipo-Transa']; ?></p>
                    <select class="form-control">
                    </select>
                </div>
                <div class="col-sm-10 col-centered">
                    <br>
                    <p><?php echo $lang['Tipo-Prop']; ?></p>
                    <select class="form-control">
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
                        <input placeholder="<?php echo$lang['Cuartos']; ?>" type="number" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input placeholder="<?php echo $lang['Salas']; ?>" type="number" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input placeholder="<?php echo $lang['Cocinas']; ?>" type="number" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 col-centered">
                         <input placeholder="<?php echo $lang['Baños']; ?>" type="number" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input placeholder="<?php echo $lang['Comedores']; ?>" type="number" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input placeholder="<?php echo $lang['Jardines']; ?>" type="number" class="form-control">
                    </div>
                </div>
                <br>    
                <div class="row">
                    <div class="col-sm-4 col-centered">
                         <input placeholder="<?php echo $lang['Cocheras']; ?>" type="number" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input placeholder="<?php echo $lang['Terraza']; ?>" type="number" class="form-control">
                    </div>
                    <div class="col-sm-4 col-centered">
                         <input placeholder="<?php echo $lang['Sotanos']; ?>" type="number" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row row-centered">
                    <div class="col-sm-4 col-centered">
                         <input placeholder="<?php echo $lang['Piscinas']; ?>" type="number" class="form-control">
                    </div>  
                </div>
            </div>
        <br>
    </div>
    <div id="contenido9">
        <h2>No hay resultados que mostrar. :(</h2>
    </div>
</div>
</body>
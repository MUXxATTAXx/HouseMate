<head>
	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>	
   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
    <link href='css/estilo.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
    <title>Inicio</title>
</head>
<body id="intro">
<?php
    include("Header/barranav2.php");
?>
<a class="btn btn-sm btn-primary"><?php echo $lang['quick'] ?></a>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-body">
		<div class="row">
			<div class="col-xs-4"> 
				<input class="form-control" type="text" id="busqueda" />
			</div>
			<div class="col-xs-4"> 
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
</body>
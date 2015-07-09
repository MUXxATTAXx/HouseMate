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

    <?php
        include "Peritaje/paredes.php";
    ?>
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
        
          
		<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['peri-modal2'];?></button>
        
      </div>
    </div>
  </div>
</div>
<script href="js/jquery-1.11.2.min.js"></script>
    <script>
        $( document ).ready(function() {      
function loadData(){
$.ajax({   
type: 'POST',   
url: 'Call/Funciones/update.php',   
success: function(msg) {
$("#thetablejq").html(msg);
},
});
};
    $("#confirmar").click(function(){

    //obtenemos el texto introducido
    var nombre_pared = $("#nombre_pared").val();
    var valor_pared = $("#valor_pared").val();

    //ingresar usuario

    $.ajax({
        type: "POST",
        url: "Call/Funciones/peritaje.php",
        data: {nombre_pared:nombre_pared, valor_pared: valor_pared},
        dataType: "html",
        error: function(){
              alert("error petición ajax");
        },
        success: function(data){  
            $("#nombre_pared").val("");
            $("#valor_pared").val("");
            
            $("#resultadoinsert").empty();
            $("#resultadoinsert").append(data);
            loadData();	
                }
          });

    });
});
        </script>
</body>
</html>
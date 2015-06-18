<head>
	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>	
   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
    <link href='css/estilo.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/empresatag.css" rel="stylesheet">
   
</head>
<body id="intro">
<?php
    echo("
<meta charset=utf-8 />
    ");
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
 <title><?php echo $lang['Inicio'] ?></title>
<br>
<br>
<form method="POST" action="Empresa.php">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $lang['EmpresaN'] ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> 
					<div class="row">
						<div class="form-group col-xs-12">
							<img class="img-responsive imagenpequeña" id="imagenempresa" > 
						</div>
						<div class="form-group col-xs-12">
							<div class="btn btn-primary btn-file">
								<i class="glyphicon glyphicon-folder-open"></i><?php echo $lang['Buscar3'] ?><input name="archivo" type="file" class="file" onchange="readURL(this)">
							</div>
						</div>
					</div>
				</div>
                <div class=" col-md-9 col-lg-9 ">
					<div class="row">
						<div class="form-group col-xs-6">
							<label>*<?php echo $lang['Nombre'] ?>:</label>
							<input name="nombre" class="form-control">
						</div>
						<div class="form-group col-xs-6">
							<label>*NIT:</label>
							<input name="nit" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-xs-6">
							<label>*<?php echo $lang['tel'] ?>:</label>
							<input name="telefono" class="form-control">
						</div>
						<div class="form-group col-xs-6">
							<label><?php echo $lang['tel2'] ?>:</label>
							<input name="telefono2" class="form-control">
						</div>
					</div>
					<div>
						<?php include "Call/Funciones/select3.php"; ?>
					</div>
					<div class="row">
						<div class="form-group col-xs-12">
							<label><?php echo $lang['Descripcion'] ?>:</label>
							<textarea name="descripcion" class="form-control"></textarea>
						</div>
					</div>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
				 <center>
					<button name="ingresar" type="submit" class="btn btn-primary extraright"><?php echo($lang['insert'])?></button>
					<?php
					if(isset($_POST['ingresar'])){
						if($_POST['nombre'] != "" and $_POST['nit'] != "" and $_POST['telefono'] != "" and $_POST['Departamento3'] != ""
							and $_POST['Municipio3'] != "nada"){
						include "Call/Empresa/Empresafuncion/crearempresa.php";
						}
						else{
							echo "<span class='label label-warning'>" .$lang['missing']." (*)</span>";
						}
					}
					else{
						
					}
					?>
				</center>	
             </div>
          </div>
        </div>
      </div>
	  </form>
 <script type="text/javascript" src="js/jquery.chained.js" charset="utf-8"></script>

 <script>
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagenempresa')
                    .attr('src', e.target.result)
            };
			
            reader.readAsDataURL(input.files[0]);
        }
    }
  $(function() {
$("#Municipio3").chained("#Departamento3");
});
</script>
</body>
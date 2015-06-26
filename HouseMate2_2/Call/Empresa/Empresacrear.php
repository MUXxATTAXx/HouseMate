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
if ($_SESSION['true'] != true || empty($_SESSION['true']))
{
	header("Location: Call/Empresa/mejorela");
	die();
}
    echo("
<meta charset=utf-8 />
    ");
	if(isset($_SESSION['tip']))
	{
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
	}
?>
 <title><?php echo $lang['Empresa'] ?></title>
<br>
<br>
<form method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $lang['EmpresaN'] ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4 col-lg-4 " align="center"> 
					<div class="row">
						<div class="form-group col-xs-12">
							<img class="img-responsive imagenpequeña" id="imagenempresa" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"> 
						</div>
						<div class="form-group col-xs-12">
							<div class="btn btn-primary btn-file">
								<i class="glyphicon glyphicon-folder-open"></i><?php echo $lang['Buscar3'] ?>
								<input type="file" class="file" onchange="readURL(this)" name="file" >
							</div>
						</div>
					</div>
				</div>
                <div class=" col-md-8 col-lg-8 ">
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
					<a href="Empresacheck.php" class="btn btn-primary extraright"><?php echo($lang['Buscar3'])?></a>
					<br>
					<?php	
						include "Call/Empresa/Empresafuncion/crearempresa.php";
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
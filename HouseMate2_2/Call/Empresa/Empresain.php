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
			break;
			case 4:
			include("Header/barranav6.php");
			break;
		}
	}
	$idt = $_SESSION['id'];
	$idempresalater = "";
	
	$queryportodos = mysql_query("Select * FROM usuario Inner join empresa on usuario.Empresa = Empresa.dueño WHERE usuario.TempId = '$idt'");
	while($row = mysql_fetch_array($queryportodos))
	{
?>

 <title><?php echo $lang['Empresa'] ?></title>
<br>
<br>
<span id="value" class="hidme"><?php echo $row['IdEmpresa'] ?></span>
<form method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >
          <div class="panel panel-info">
            <div id="what" class="panel-heading" style='
				padding-bottom: 0px;
				border-bottom-width: 0px;'>
             <ul  class="nav nav-tabs forcenavchange">
				
				<?php 
				$queroempresario = "SELECT tbusuario.nombre, tbusuario.apellido, tbusuario.correo, usuario.Rating,tbusuario.usuario FROM usuario inner join 
				tbusuario on usuario.TempId = tbusuario.IdUsuario inner join empresa on usuario.Empresa = empresa.IdEmpresa WHERE 
				usuario.idusuario = empresa.dueño AND Empresa.IdEmpresa ='".$row['IdEmpresa']."' AND usuario.idusuario = '$idt'";
				$master = mysql_query($queroempresario);
				$idempresa = $row['IdEmpresa'];
				$idempresalater = $idempresa;
				if(mysql_num_rows($master) > 0)
				{
					echo "<li id='me' class='active'><a href='#home' data-toggle='tab'>".$lang['Inicio']."</a></li>
					<li id='me2'><a href='#socios' data-toggle='tab'>".$lang['miembros']."</a></li>
					<li id='me3'><a href='#configurar' data-toggle='tab'>".$lang['Solicitud']."</a></li>
					<li id='me4'><a href='#solicitud' data-toggle='tab'>".$lang['Config']."</a></li>
					<li id='me5'><a href='#informacion' data-toggle='tab'>".$lang['Informacion']."</a></li>";
				}
				else
				{
					echo "<li id='me' class='active'><a href='#home' data-toggle='tab'>".$lang['Inicio']."</a></li>
					<li id='me2'><a href='#crear' data-toggle='tab'>".$lang['miembros']."</a></li>
					<li id='me3'><a href='#sd' data-toggle='tab'>".$lang['Ver-Inmuebles']."</a></li>";
				}
				?>
			</ul>
            </div>
            <div class="panel-body">
			
			<div id='myTabContent' class='tab-content'>

			<div class='tab-pane fade active in' id='home'>
			
			</div>
			 <div class='tab-pane fade' id='socios'>
			
			<div id="thetablemiembre">

			</div>
			 </div>
			 <div class="tab-pane fade" id="solicitud">
			  <div id="morepeople">
				</div>
			</div>
			<div class="tab-pane fade" id="configurar">
			  <div class="row row-centered">
				<?php include'Call/Empresa/Empresafuncion/verusuario.php'  ?>
				</div>
			</div>
			<div class="tab-pane fade" id="informacion">
			  <div class="row row-centered">
               <div class="col-md-4 col-lg-4 " align="center"> 
					<div class="row">
						<div class="form-group col-xs-12">
							<img class="img-responsive imagenpequeña" id="imagenempresa" src="<?php echo "img/Empresas/".$row['imagen'] ?>"> 
						</div>
						<div class="form-group col-xs-12">
						</div>
					</div>
				</div>
                <div class=" col-md-8 col-lg-8 justificar">
					<div class="row">
						<div class="row">
							<div class="form-group col-xs-4">
								<label><?php echo $lang['NCompañia'] ?>:</label>
							</div>
							<div class="form-group col-xs-8">
								<label><?php echo $row['nombre'] ?></label>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-4">
								<label>NIT:</label>
							</div>
							<div class="form-group col-xs-8">
								<label><?php 
								$resultad1 = substr($row['nit'] , 0, 4);
								$resultad2 = substr($row['nit'], 4, 6);
								$resultad3 = substr($row['nit'], 10, 3);
								$resultad4= substr($row['nit'], 13, 1);
								echo $resultad1."-".$resultad2."-".$resultad3."-".$resultad4; ?></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="row">
							<div class="form-group col-xs-4">
								<label><?php echo $lang['tel'] ?>:</label>
							</div>
							<div class="form-group col-xs-8">
								<label><?php
								$result = substr($row['telefono'], 0, 4);
								$result2 = substr($row['telefono'], 4, 4);
								echo $result."-".$result2; ?></label>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-4">
								<label><?php echo $lang['tel'] ?>2:</label>
							</div>
							<div class="form-group col-xs-8">
								<label><?php 
								$result = substr($row['telefono2'], 0, 4);
								$result2 = substr($row['telefono2'], 4, 4);
								echo $result."-".$result2; ?></label>
							</div>
						</div>
					</div>	
					<div>
					</div>
					<div class="row">
						<div class="row">
							<div class="form-group col-xs-12">
								<label><?php echo $lang['Direccion'] ?>:</label>
								<br>
								<label><?php echo $row['direccion'] ?></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="row">
							<div class="form-group col-xs-12">
								<label><?php echo $lang['Descripcion'] ?>:</label>
								<br>
								<label><?php echo $row['descrip'] ?></label>
							</div>
						</div>
					</div>
                </div>
              </div>
			</div>
			 </div>
            </div>
                 <div class="panel-footer">
				 <center>
					<?php
						// include "Call/Empresa/Empresafuncion/crearempresa.php";
					?>
				</center>	
             </div>
          </div>
        </div>
      </div>
	  </form>
 <script type="text/javascript" src="js/jquery.chained.js" charset="utf-8"></script>
   <script type="text/javascript" src="Call/Empresa/Empresajs/Empresa.js"></script>
<?php } ?>
</script>
</body>
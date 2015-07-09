<head>
	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>		
   <link href='css/bootstrap.min.css' rel='stylesheet'/>

	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/empresatag.css" rel="stylesheet">
   
</head>
<body id="intro">
<?php
if ($_SESSION['true'] != true || empty($_SESSION['true']))
{
	header("Location: Call/Empresa/mejorela.php");
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
	$idt = $_SESSION['id'];
	$idempresalater = "";
	
	$queryportodos = mysql_query("Select * FROM usuario Inner join empresa on usuario.Empresa = Empresa.dueño WHERE usuario.TempId = '$idt'");
	while($row = mysql_fetch_array($queryportodos))
	{
?>

 <title><?php echo $lang['Empresa'] ?></title>
<br>
<span id="value" class="hidme"><?php echo $row['IdEmpresa'] ?></span>
<form method="post" action="Empresa.php" enctype="multipart/form-data">
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
					echo "<li id='me' class='active negro'><a href='#home' data-toggle='tab'>".$lang['Inicio']."</a></li>
					<li id='me2' class='negro'><a href='#socios' data-toggle='tab'>".$lang['miembros']."</a></li>
					<li id='me3' class='negro' ><a href='#solicitud' data-toggle='tab'>".$lang['Solicitud']."</a></li>
					<li id='me4' class='negro'><a href='#configurar' data-toggle='tab'>".$lang['Config']."</a></li>
					<li id='me5' class='negro'><a href='#informacion' data-toggle='tab'>".$lang['Informacion']."</a></li>";
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
				<?php
				if(mysql_num_rows($master) > 0)
				{
				echo "
					<div class='tab-pane fade active in' id='home'>
						<div id='cambio'>
						</div>
					</div>
					<div class='tab-pane fade' id='socios'>
						<div>
							<div id='thetablemiembre'>
						</div>
						</div>
						<div id='resultborrar'>
						</div>
					</div>";
					
					echo "<div class='tab-pane fade' id='solicitud'>
						<div class='row row-centered'>";
								include 'Call/Empresa/Empresafuncion/verusuario.php';  
						echo "</div>
						<div id='morepeople'>
						</div>
					</div>
					<div class='tab-pane fade' id='configurar'>
						<div class='row row-centered'>";
						include "Call/Empresa/Empresafuncion/configurar.php"; 
						echo "</div>
					</div>"; }?>
					<div class="tab-pane fade" id="informacion">
						<?php include "Call/Empresa/informacion.php" ?>
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
		
		<script type="text/javascript" src="Call/Empresa/Empresajs/Empresa.js"></script>
			
<?php } ?>
<span id="teste" class="hidme"></span>
<div id='delete' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='panel-footer'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
         <h4 class='modal-title' id='myModalLabel'><?php echo $lang['Cdelete'] ?></h4>
      </div>
      <div class='modal-body'>
                <p><?php echo $lang['Xdelete'] ?></p>
                <p><?php echo $lang['Fdelete']?></p>
                <p class='debug-url'></p>
				<div class="row">
				<button class='btn btn-default' id='borrar' data-dismiss='modal'><?php echo $lang['Salir'] ?></button>
				<a type='button' class='btn btn-default' data-dismiss='modal'><?php echo $lang['Aceptar'] ?></a>
				</div>
      </div>
      <div class='panel-footer'>
      </div>
    </div>
  </div>
</div>
<!-- Modal content-->
<div id='accept' class='modal fade' role='dialog'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='panel-footer'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
         <h4 class='modal-title' id='myModalLabel'><?php echo $lang['Cdelete'] ?></h4>
      </div>
      <div class='modal-body'>
                <p><?php echo $lang['Xdelete'] ?></p>
                <p><?php echo $lang['Fdelete']?></p>
                <p class='debug-url'></p>
				<div class="row">
				<button class='btn btn-default' id='accept' data-dismiss='modal'><?php echo $lang['Salir'] ?></button>
				<a type='button' class='btn btn-default' data-dismiss='modal'><?php echo $lang['Aceptar'] ?></a>
				</div>
      </div>
      <div class='panel-footer'>
      </div>
    </div>
  </div>
</div>
<!-- Modal content-->
<div id='denegar' class='modal fade' role='dialog'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='panel-footer'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
         <h4 class='modal-title' id='myModalLabel'><?php echo $lang['Cdelete'] ?></h4>
      </div>
      <div class='modal-body'>
                <p><?php echo $lang['Xdelete'] ?></p>
                <p><?php echo $lang['Fdelete']?></p>
                <p class='debug-url'></p>
				<div class="row">
				<button class='btn btn-default' id='denegar' data-dismiss='modal'><?php echo $lang['Salir'] ?></button>
				<a type='button' class='btn btn-default' data-dismiss='modal'><?php echo $lang['Aceptar'] ?></a>
				</div>
      </div>
      <div class='panel-footer'>
      </div>
    </div>
  </div>
</div>
		
<script type="text/javascript" src="js/deletemember.js"></script>
<script src='js/jquery-1.11.2.min.js' type='text/javascript'></script>
<script type="text/javascript" src="js/jquery.chained.js" charset="utf-8"></script>
<script src='js/bootstrap-table.js' type='text/javascript'></script>
</body>
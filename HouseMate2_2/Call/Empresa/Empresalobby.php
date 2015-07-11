<head>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<link href='css/bootstrap.min.css' rel='stylesheet'/>
<link href='css/appeal.css' rel='stylesheet'/>
<link href='css/intro.css' rel='stylesheet'/>
<link href='css/bootstrap-table.css' rel='stylesheet'>
<link href='css/empresatag.css' rel='stylesheet'>
</head>
<body id='intro'>
<?php
include ('Call/Lenguaje/lenguaje.php');
    echo('
<meta charset=utf-8 />
    ');
	if(isset($_SESSION['tip']))
	{
		switch($_SESSION['tip'])
		{
			case 1:
		    include('Header/barranav2.php');
			break;
			case 2:
			break;
			case 3:
        include('Header/barranav3.php');
			break;
			case 4:
			   include('Header/barranav6.php');
			break;
		}
	}

?>
 <title><?php echo $lang['Empresa'] ?></title>
<form method='post' enctype='multipart/form-data'>
<?php
	if(isset($_GET['empresa']) || isset($_SESSION['empresalobby']))
	{
		if(isset($_GET['empresa'])){
			$variable = $_GET['empresa'];
		}
		elseif(isset($_SESSION['empresalobby'])){
			$variable = $_SESSION['empresalobby'];
		}
		$_SESSION['empresalobby'] = $variable;
		$id = $variable;
		$query = mysql_query("Select * from empresa where IdEmpresa = '$variable'");
		while ($row = mysql_fetch_array($query))
		{
	?>
			<br>
			<div class='row'>
			<div class="col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 toppad" >
			  <div class='panel panel-info'>
				<div class='panel-heading'>
				  <h3 class='panel-title'><?php echo $row['nombre'];

				  ?></h3>
				</div>
				<div class='panel-body'>
				<br>
				  <div class='row'>
					<div class='col-md-4 col-lg-4 ' align='center'>
						<div class='row'>
							<div class='form-group col-xs-12'>
								<img class='img-responsive imagenpequeña' id='imagenempresa'
								src='<?php
								$filename = "img/Empresas/".$row['imagen'];
								if(file_exists($filename))
								{
									$hayimagen = "img/Empresas/".$row['imagen'];
									echo "img/Empresas/".$row['imagen'];
								}
								else
								{
									echo "https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100";
								}
								?>'>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								NIT:
								<?php
								$rest = substr($row['nit'], 0, 4);
								$rest2 = substr($row['nit'], 4, 6);
								$rest3 = substr($row['nit'], 10, 3);
								$rest4 = substr($row['nit'], 13, 1);
								echo $rest."-".$rest2."-".$rest3."-".$rest4;
								?>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								Rating:
								<?php
								echo " ".$row['ratings'];
								?>
							</div>
						</div>
					</div>
					<div class=' col-md-8 col-lg-8 '>
						<div class="row">
							<div>
							<?php	$dueno = mysql_query("Select tbusuario.nombre, tbusuario.apellido From usuario inner join tbusuario on  usuario.tempid = tbusuario.idusuario
							Where usuario.idusuario = '".$row['dueño']."'");
							while($row2 = mysql_fetch_array($dueno))
							{
								echo $lang['Admin'].": ".$row2['nombre']." ".$row2['apellido'];
								?>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-lg-12">
								<?php
								$rest = substr($row['telefono'], 0, 4);
								$rest2 = substr($row['telefono'], 4, 4);
								echo $lang['tel'].": ".$rest."-".$rest2;
								?>
							</div>
						</div>
						<br>
						<div class="row">
							<div>
								<?php
									echo $lang['Direccion'].": ".$row['direccion'];
								?>
							</div>
						</div>
						<br>
						<div class="row">
							<div>
								<?php
								echo $lang['Descripcion'].": ".$row['descrip'];

								?>
							</div>
						</div>
						<?php } ?>


					</div>
				  </div>
				  <br>
				  <div class="row row-centered">
					<?php
						$mate = mysql_query("Select usuario.idusuario FROM usuario inner join tbusuario on
						usuario.TempId = tbusuario.idusuario Where usuario.TempId = '".$_SESSION['id']."'");
						while ($get = mysql_fetch_array($mate))
						{
							$personaid = $get['idusuario'];
							$checkmesage = mysql_query("Select * From empresasolicitud Where idempresa = '$variable' and idusuario = '$personaid'");
							while($print = mysql_fetch_array($checkmesage))
							{
								echo "<div class='col-lg-8 col-centered'>
								".$lang['mensaje'].": ".$print['mensaje']."
								</div>";
							}
						}

					?>
				  </div>
				  <div class="row">
							<div>
							<center>
							<br>
								<div id='respond'>
								</div>
							</center>
							</div>
						</div>
				</div>
					<div class='panel-footer'>
					<center>
						<a name='ingresare' id="check" class='btn btn-success btn-sm extraright'><?php echo $lang['accept'] ?></a>
						<a name='nothanks' id="reject" class='btn btn-primary btn-sm extraright'><?php echo $lang['No'] ?></a>
					<br>

					</center>
				</div>
			</div>
		</div>
	</div>
	<?php
		}
	}
	else
	{

	}
	?>
	<script type="text/javascript" src="js/casa.js">
</script>
	</form>

</body>

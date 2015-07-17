<?php
session_start();
include('conexion.php');
include('Call/Lenguaje/lenguaje.php');
?>
<head>
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/empresatag.css" rel="stylesheet">
</head>
<body id='intro'>
<?php
if ($_SESSION['true'] != true || empty($_SESSION['true']))
{
	header('Location: mejorela.php');
	die();
}
    echo('<meta charset=utf-8 /> ');
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
 <title><?php echo $lang['Empresa']  ?></title>
<br>
<br>
<div class="row">
	<div class="col-sm-2">
		<a name='nothanks' id="back" href="Empresa.php" class='btn btn-warning btn-sm extraleft'><?php echo $lang['back'] ?></a>
	</div>
	<div class="col-sm-2">
	</div>
	<div class="col-sm-2">
	</div>
	<div class="col-sm-2">
	</div>
</div>
<div class='container'>
    <div class='row'>
	<?php
		$variable = $_SESSION['id'];
		$query = mysql_query("Select empresa.idempresa, empresa.nombre, empresa.direccion, empresa.imagen, empresa.ratings, empresa.IdEmpresa, tbusuario.usuario from Empresa inner join usuario on empresa.dueño = usuario.idusuario
		inner join tbusuario on usuario.TempId = tbusuario.idusuario where usuario.TempId <> '$variable'");
		while($row = mysql_fetch_array($query))
		{ ?>
		<div class='col-sm-6'>
                <div class='row well well-sm'>
                    <div class='col-sm-4'>
						<img class="smallimage" src='<?php
							if($row['imagen'] == "" || $row['imagen'] == null)
							echo "https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100";
							else
							echo "img/Empresas/".$row['imagen'];
						?>'
						>
                    </div>
                    <div class='col-sm-8'>
						<div class="row">
							<div class="col-sm-12">
							<h4> <?php echo $row['nombre'] ?></h4>
							<small><cite><?php echo $row['direccion'] ?><i class='glyphicon glyphicon-map-marker'>
							</i></cite></small>
							<p>
								<a class='glyphicon glyphicon-envelope btn btn-sm btn-primary' href="enviar_msj.php?destin=<?php echo $row['usuario']?>"></a>
								<a class='glyphicon glyphicon-info-sign btn btn-sm btn-primary' href="Empresawatch.php?empresa=<?php echo $row['idempresa'] ?>"> </a>
								<a class='glyphicon glyphicon-user btn btn-sm btn-primary' href="perfil.php?usuario=<?php echo $row['usuario']?>"> </a><br><br><i class='glyphicon glyphicon-thumbs-up btn-info btn-sm'><?php echo $row['ratings'] ?></i>
								<br>
								<br/>
								</p>
							</div>
						</div>
                    </div>
            </div>
		</div>
		<?php
		}
		?>
    </div>
</div>

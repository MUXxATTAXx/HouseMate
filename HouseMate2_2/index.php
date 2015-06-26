<?php
require ("Call/Lenguaje/lenguaje.php");
?>
<!DOCTYPE HTML>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<html>
<head>

	<title>House Mate</title>
	<meta charset = "utf-8" />
   <?php
    include "Call/spr.php";
if(isset($_SESSION['id'])){
    header('Location: adminhomepage.php');
}
?>
	<link href="css/parallax.css"	rel="stylesheet" type="text/css" />
</head>
<body>

<?php
    include "Header/barranav0.php";
?>
<div class = "row">
	<div class ="col col-sm-1" >
	</div>
		<div class ="col col-sm-10" >
	<center>
		<div id="wrapper" >
			<div id="main">
				<center>
				<div class="container-fluid one child" >
					<div class="row text-center">
						<h3 class="try" style="color:white;font-family:verdana;"><?php echo $lang['Novedades']?></h3>
					</div>
					<div class="row">
						<?php include ('Call/Funciones/showme.php') ?>
					</div>
				</div>
				<br>
				<center>
				<div class="formD3 two child">
					<div class="jumbotron" width="80%">
							<h3><?php echo($lang['QueEs']);?></h3>
							<?php echo($lang['QueEs1']);?>
					</div>
				</div>
				</center>
			</div>
		</div>
	</center>
	</div>
</div>
</body>
<script src="js/parallax.js"></script>
</html>

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
<div id="wrapper">

  
		<div id="main">
<div class="container-fluid one">
	<div class="row text-center">
		<h3 class="try" style="color:white;font-family:verdana;"><?php echo $lang['Novedades']?></h3>
	</div>
	<div class="row">
		<?php include ('Call/Funciones/showme.php') ?>
	</div>
</div>	
<center>
<form class="formD3 two">
    <div class="jumbotron" width="80%">
        <h2 class="pD1"><?php echo($lang['QueEs']);?></h2>
        <p class="pD1"><?php echo($lang['QueEs1']);?></p>
    </div>
</form>
</center>
</div>
</div>
</body>
<script src="js/parallax.js"></script>
</html>
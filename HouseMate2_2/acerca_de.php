
<!DOCTYPE HTML>
<html>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<head>

	<title>Login</title>
	<meta charset = "utf-8" />
   <?php
    
    include "Call/spr.php";
?>
	
</head>
<body>  
<?php
    include "Header/barranav0.php";
include_once "Call/Lenguaje/lenguaje.php";
?>

<body>  
 <center>
 <form class="formD3">
 
	<div class="jumbotron">
	<h2 class="h1-D1"><img src="img/House%20Mate%20Logo%205.png" height="150px" width="210px"><?php echo($lang['Acerca']);?></h2>
	<hr><h2 class="pD1"><?php echo($lang['Mision']);?></h2>
	<p class="pD1"><?php echo($lang['Mision1']);?></p><hr>
	<h2 class="pD1"><?php echo($lang['Vision']);?></h2>
	<p class="pD1"><?php echo($lang['Vision1']);?></p>
	<hr>
	<p><a href="http://santacecilia.edu.sv" class="btn btn-primary btn-lg"><?php echo($lang['Institucion']);?></a></p>
	</div>
</form>
</center>
</body>


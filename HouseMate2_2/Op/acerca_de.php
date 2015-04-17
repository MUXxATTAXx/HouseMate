<!DOCTYPE HTML>
<html>
<head>

	<title>Login</title>
	<meta charset = "utf-8" />
   <?php
    
    include "Call/spr.php";
?>
	
</head>
<body>  
<?php
    include "Header/barranav1.php";
include_once "Call/Lenguaje/lenguaje.php";
?>
<body>
<form class="formD3">
    <div class="jumbotron" width="80%">
      <h1 class="h1-D1"><img src="img/House%20Mate%20Logo%205.png" height="200px" width="210px"><?php echo($lang['Acerca']);?></h1>
      <p class="pD1"><?php echo($lang['AcercaDe']);?></p>
      <p class="pD1"><a href="http://santacecilia.edu.sv" class="btn btn-primary btn-lg"><?php echo($lang['Institucion']);?></a></p>
    </div>
</form>
</body>


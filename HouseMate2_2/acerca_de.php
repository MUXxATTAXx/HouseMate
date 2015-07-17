<?php
require ("Call/Lenguaje/lenguaje.php");
?>

<!DOCTYPE HTML>
<html>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<head>

	<title><?php echo $lang['Acerca']; ?></title>
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
 <div class=" row-centered" id="colorme">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">
		<div id="parent">
			<div id="child">
				<div>
					<div class="row" >
					<h3 class="h1-D1"><img src="img/House%20Mate%20Logo%205.png" height="100px" width="130px"><?php echo($lang['Acerca']);?></h3>
					</div>
					<div class="row justify">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-10">
							<h3 class="pD1"><?php echo($lang['Mision']);?></h3>
							<p class="pD1"><?php echo($lang['Mision1']);?></p>
						</div>
					</div>
					<br>
					<div class="row justify">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-10">
							<h3 class="pD1"><?php echo($lang['Vision']);?></h3>
							<p class="pD1"><?php echo($lang['Vision1']);?></p>
						</div>
					</div>
					<br>
					<p><a href="http://santacecilia.edu.sv" class="btn btn-primary btn-sm"><?php echo($lang['Institucion']);?></a></p>
				</div>
			</div>
			<div id="opacity"></div>
		</div>

	</div>
	<div class="col-sm-1">
	</div>
</div>
</center>
</body>

<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href='css/change.css' rel='stylesheet'/>
<?php
    include("Header/barranav2.php");
?>
<!DOCTYPE HTML>
<html onload="refresh()">
<head>
	<title><?php echo($lang['Page_title']);?></title>
	<meta charset = "utf-8" />
	
</head>
<body> 
<form method="post">
<h1><?php echo($lang['Usuarios']);?></h1>
<!-- Logic para change of active tab -->

	<?php
		include "Call/Loged/urgent.php";
		
		?>
<div id='myTabContent' class='tab-content'>
	<?php 
	include "Call/Funciones/tab.php"; 
	?>
</div>
</form>
 <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
<script src="js/bootstrap-table.js" ></script>
</body>
</html>
<head>
	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
   <link href='css/bootstrap.min.css' rel='stylesheet'/>
   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/empresatag.css" rel="stylesheet">
<title><?php echo $lang['Empresa'] ?></title>
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
	$queryportodos = mysql_query("Select * FROM usuario inner join empresa on usuario.empresa = empresa.idempresa WHERE usuario.TempId = '$idt' and empresa <> ''");
	include "Call/Empresa/Empresafuncion/whoisthelider.php"; ?>
<span id="teste" class="hidme"></span>

<script type="text/javascript" src="Call/Empresa/Empresajs/Empresa.js"></script>
<script type="text/javascript" src="js/deletemember.js"></script>
<script src='js/jquery-1.11.2.min.js' type='text/javascript'></script>
<script type="text/javascript" src="js/jquery.chained.js" charset="utf-8"></script>
<script src='js/bootstrap-table.js' type='text/javascript'></script>
</body>

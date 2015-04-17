<?php
    echo("
    <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
    ");
    echo "<link href='css/change.css' rel='stylesheet'/>";
    
    include("Header/barranav2.php");
    
?>
<!DOCTYPE HTML>
<html onload="refresh()">
<head>
	<title><?php echo($lang['Page_title']);?></title>
	<meta charset = "utf-8" />
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
</head>
<body> 
    <form method="post">
<h1><?php echo($lang['Usuarios']);?></h1>

<ul id="what" class="nav nav-tabs">
    <li id="me" class='active'><a href='#home' data-toggle='tab'><?php echo($lang['Crear-Usuario']);?></a></li>
    <li id="me2"><a href='#crear' data-toggle='tab'><?php echo($lang['Ver-Usuario']);?></a></li>
    <li id="me3"><a href='#sd' data-toggle='tab' ><?php echo($lang['Modificar-Usuario']);?></a></li>
    <li id="me4"><a href='#eliminar' data-toggle='tab' ><?php echo($lang['Eliminar-Usuario']);?></a></li>
</ul>
    <?php

echo "<div id='myTabContent' class='tab-content'>
	<div class='tab-pane fade active in' id='home'>";

include'admincliente/crear_cliente.php';
        
echo  " </div>
	<div class='tab-pane fade' id='crear'>";

include'admincliente/admin_mostrar.php';
?>
  </div>
  <div class="tab-pane fade" id="sd">
        <?php include("admincliente/admin_modificar.php");
        include_once "Call/Lenguaje/lenguaje.php";
        ?>

  
  </div>
     <div class="tab-pane fade" id="eliminar">
         <?php include('admincliente/admin_eliminar.php'); 
        include_once "Call/Lenguaje/lenguaje.php";?>
       
  </div>
<?php

        if(isset($_POST['Soy']))
        {
            if(isset($_POST['lo']))
            {
            $Kongre = $_POST['lo'];
            require 'conexion.php';
            mysql_query("SET NAMES 'utf8'");
            $consulta = "DELETE FROM tbusuario WHERE correo = '$Kongre'";
            if(mysql_query($consulta))
                echo "<p>Usuario Eliminado</p>";
            else
                echo "<p>Consulta de Eliminar fallo".mysql_error()."</p>";
            }
        }
?>
    
</form>
</body>
</html>
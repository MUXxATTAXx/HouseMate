<!DOCTYPE HTML>
<html>
<head>

	<title>Login</title>
	<meta charset = "utf-8" />
   <?php
    include "Call/spr.php";
?>
	<link href="css/parallax.css"	rel="stylesheet" type="text/css" />
	
</head>
<body> 
 
<?php

if(isset($_SESSION['id'])){
    include "Header/barranav0.php";
}else{
    include "Header/barranav1.php";
}

?>
 <br>
<div id="main">
    <div class="row">
    <?php
        include "conexion.php";
        $dueno = $_GET['IdUsuario'];
        /*if(isset($dueno))
        {
           
        }else{
             echo
            "<script> 
			location.replace('index.php'); 
			</script>";
        }*/
        $consulta = ( "select * FROM tbusuario WHERE Idusuario = '$dueno'");
        $cs = mysql_query($consulta);
        while ($row=mysql_fetch_array($cs)){
    ?>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php
                        if($row['tipo'] == 1){
                            echo $lang['Admin'];
                        }
                        elseif($row['tipo' == 4]){
                            echo $lang['Cliente'];
                        }
                    ?>
                </h3>
            </div>
            <div class="panel-body">
            <center>
                <form action="mejorar_perfil.php" method="POST">
                  <div class="row">   
                    <div class=" col-md-9 col-lg-9 ">
                    <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><?php echo $lang['Nombre'];?></td>
                        <td><?php echo $row['nombre']." ".$row['apellido'] ?></td>
                      </tr>
                        <tr>
                        <td><?php echo $lang['Correo'];?></td>
                        <td><?php echo $row['correo'] ?></td>
                        </tr>
                      <tr>
                        <td><hr><?php echo $lang['Usuarioname'];?></td>
                        <td><hr><?php echo $row['usuario'] ?></td>
                      </tr>              
                    </tbody>
                  </table>
                    </div>
                  </div>     
            </div>
            <?php
                }
            ?>
            </center>
            <div class="panel-footer">
                <input type="submit" name="mejorar" class="btn btn-primary" value="Ofertar">
            </div>

            </form>
            </div>
        </div>
        </div>
    </div>
</div>
      

</body>
<script src="js/parallax.js"></script>
</html>
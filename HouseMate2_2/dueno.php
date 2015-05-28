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

if(isset($_SESSION['id'])){
    include "Header/barranav0.php";
}else{
    include "Header/barranav1.php";
}

?>
<br>
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
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
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
				 <?php
                }
				$consulta = ( "select tbusuario.* , usuario.* from tbusuario inner join usuario on tbusuario.idUsuario = usuario.TempId WHERE tbusuario.idUsuario = '$dueno'");
				$cs = mysql_query($consulta);
				while ($row=mysql_fetch_array($cs)){
            ?>
                      <tr>
					  <hr>
						<td><hr><?php echo $lang['Direccion'];?></td>
                        <td><hr><?php echo $row['Direccion'];?></td>
                      </tr>
					  <tr>
					  <td><?php echo "NIT" ?></td>
						<td><?php 
						$Nresult1 = substr($row['NIT'],0,4);
						$Nresult2 = substr($row['NIT'],4,6);
						$Nresult3 = substr($row['NIT'],10,3);
						$Nresult4 = substr($row['NIT'],13,1);
						echo $Nresult1."-".$Nresult2."-".$Nresult3."-".$Nresult4 ?></td>
                      </tr>
					  <tr>
						<td><?php echo "DUI" ?></td>
						<td><?php
						$Dresult = substr($row['DUI'], 0, 8);
						$Dresult2 = substr($row['DUI'], 8, 1);
								
						echo $Dresult."-".$Dresult2  ?></td>
					  </tr>
					  <tr>
						<td><?php echo $lang['tel'] ?></td>
						<td><?php $Telefono1 = substr($row['telefono1'],0,4);
								  $Telefono2 = substr($row['telefono1'],4,4);
						echo $Telefono1."-".$Telefono2 ?></td>
					  </tr>
					  <tr>
					  <td><?php echo $lang['tel'] ?></td>
					  <td><?php 
					  $Telefono1 = substr($row['telefono2'],0,4);
					  $Telefono2 = substr($row['telefono2'],4,4);
					  echo $Telefono1."-".$Telefono2 ?></td>
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
                <input type="submit" name="mejorar" class="btn btn-primary" value="Offer">
            </div>

            </form>
            </div>
        </div>
        </div>
    </div>
</div>
      

</body>
</html>
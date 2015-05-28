<?php
session_start();
      $buscar = $_POST['b'];
       
      if(!empty($buscar)) {
            buscar($buscar);
      }
       
      function buscar($b) {
            $con = mysql_connect('localhost','root', '');
            mysql_select_db('bdhousemate', $con);
       
            $sql = mysql_query("SELECT * FROM inmueble WHERE IdInmueble > 0 AND IdInmueble= '".$b."'",$con);
             
            $contar = mysql_num_rows($sql);
             
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }else{
        
			$consulta = "SELECT * FROM inmueble WHERE IdInmueble = '$b'";
			$cs = mysql_query($consulta);
			while($row = mysql_fetch_array($cs)){
//Inicio de bloque
			
		echo    "<div class='row'><div class='col-xs-12 col-sm-6 col-md-6'>
            <div class='well well-sm'>
                <div class='row'>
                    <div class='col-sm-6 col-md-4'>
                        <img height='150px' width='150px' src='".$row['Imagen']."' alt='' class='img-rounded img-responsive' />
                    </div>
                    <div class='col-sm-6 col-md-8'>
                        <h4>
                            ".$row['IdInmueble']."</h4>
                        <small><cite title='San Francisco, USA'>".$row['Direccion']."<i class='glyphicon glyphicon-map-marker'>
                        </i></cite></small>
                        <p>
                            <i class='glyphicon glyphicon-usd'></i>".$row['Precio']."
                            <br />
                            ";
						//Venta o Renta
						if($row['VentaRenta'] == 1){
							if ($_SESSION['lang'] == "en")
							{
								echo "Sale";
							}
							else
							{
								echo "Venta";
							}
						}elseif($row['VentaRenta'] == 2){
							if ($_SESSION['lang'] == "en")
							{
								echo "Rent";
							}
							else
							{
								echo "Renta";
							}
						}
						echo"
						<br />
                        <i class='glyphicon glyphicon-info-sign'></i>".$row['Descripcion']."</p>
                    </div>
                </div>
            </div>
        </div> </div>";
//Fin de bloque
		}
	}
 }
      
       
?>
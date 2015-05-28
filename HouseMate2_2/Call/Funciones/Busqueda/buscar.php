<?php
session_start();
      $buscar = $_POST['b'];
      $select = $_POST['c'];
	  
      if(!empty($buscar)) {
            buscar($buscar,$select);
      }
	  
      
      function buscar($b,$c) {
            $con = mysql_connect('localhost','root', '');
            mysql_select_db('bdhousemate', $con);
			mysql_query("Set Names 'utf8'");
            $sql = mysql_query("SELECT * FROM inmueble WHERE IdInmueble > 0 and Precio <= '$b'",$con);
             
            $contar = mysql_num_rows($sql);
             
            if($contar == 0)
			{
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }
			else
			{
				if($c == 0 and $c == null)
				{
				$consulta = " SELECT * FROM inmueble WHERE IdInmueble > 0 and Precio <= '$b'";
				}
				else
				{
					$consulta = " SELECT * FROM inmueble WHERE IdInmueble > 0 and Precio <= '$b' and VentaRenta = '$c'";
				}
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
							if (empty($_SESSION['lang']) || $_SESSION['lang'] == "es") 
							{
								echo "Venta";
							}
							else
							{
								echo "Sale";
							}
						}elseif($row['VentaRenta'] == 2){
							if (empty($_SESSION['lang']) || $_SESSION['lang'] == "es")
							{
								echo "Renta";
							}
							else
							{
								echo "Rent";
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
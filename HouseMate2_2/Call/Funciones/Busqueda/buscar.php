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
          $sql = mysql_query("SELECT * FROM inmueble WHERE IdInmueble > 0 and Precio <= $b",$con);
          include "../../Lenguaje/lenguaje.php";
            $contar = mysql_num_rows($sql);

            if($contar == 0)
			{
                  echo "No entries found for '<b>".$b."</b>'.";
            }
			else
			{
				if($c == 0 and $c == null)
				{
				$consulta = " SELECT * FROM inmueble WHERE IdInmueble > 0 and Precio <= $b and aprovado = '1' ";
				}
				else
				{
					$consulta = " SELECT * FROM inmueble WHERE IdInmueble > 0 and Precio <= $b and VentaRenta = '$c' and  aprovado = '1'";
				}
				$cs = mysql_query($consulta);
				while($row = mysql_fetch_array($cs)){
				//Inicio de bloque

						echo   "<div class='row'><div class='col-sm-12'>
							<div class='well well-sm'>
								<div class='row'>
									<div class='col-sm-6 col-md-4'>
										<img height='150px' width='150px' src='".$row['Imagen']."' alt='' class='img-rounded img-responsive' />
									</div>
									<div class='col-sm-6 col-md-8'>

										<small><cite title='San Francisco, USA'>".$row['Direccion']."<i class='glyphicon glyphicon-map-marker'>
										</i></cite></small>
										<p>
											<i class='glyphicon glyphicon-usd'>".$row['Precio']."</i>
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
										<i class='glyphicon glyphicon-info-sign'></i>".$row['Descripcion']."</p>";
                    $valor = $row['IdInmueble'];
                    $formato = mysql_query("Select * From etiqueta where idinmueble ='$valor' and Netiqueta > '5' ORDER BY `IdEtiqueta` ASC");
                    while($confog = mysql_fetch_array($formato))
                    {
                      if($confog['Netiqueta']>5)
                      {
                        switch($confog['Netiqueta'])
                        {
                        case 6: $varew = $lang['Terraza'];
                        break;
                        case 7: $varew = $lang['Piscinas'];
                        break;
                        case 8: $varew = $lang['Jardines'];
                        break;
                        case 9: $varew = $lang['Cocheras'];
                        break;
                        case 10: $varew = $lang['Sotanos'];
                        break;
                        }
                      echo "<label class='label label-info'>".$varew."</label>";
                      }
                    }
									echo "</div>
								</div>
							</div>
						</div> </div>";
				//Fin de bloque
				}
			}
		 }


?>

<?php
session_start();
      $buscar = $_POST['a'];
      $select = $_POST['b'];
      $info = $_POST['fuse'];
      $perotado = $_POST['perito'];
      $tipo = $_POST['type'];
      $get1 = $_POST['get1'];
      $get2 = $_POST['get2'];
      $get3 = $_POST['get3'];
      $get4 = $_POST['get4'];
      $get5 = $_POST['get5'];
      if(!empty($buscar)) {
            buscar($buscar,$select,$info,$perotado,$tipo,$get1,$get2,$get3,$get4,$get5);
      }
      function buscar($a,$b,$info,$perotado,$tipo,$get1,$get2,$get3,$get4,$get5) {
      $con = mysql_connect('localhost','root', '');
      mysql_select_db('bdhousemate', $con);
      mysql_query("Set Names 'utf8'");
      $sql = mysql_query("SELECT * FROM inmueble WHERE IdInmueble > 0 and Precio <= $a",$con);
      include "../../Lenguaje/lenguaje.php";
      $contar = mysql_num_rows($sql);
      $demente = "";
      $creadote = 0;
      $parte1 = "Select * FROM inmueble ";
      $parte2 = "Where IdInmueble = IdInmueble and IdInmueble > 0";
      $array = array();
      if($contar == 0)
			{
        echo "No entries found for '<b>".$a."</b>'.";
      }
			else
			{
        for($i = 0; $i < 5;$i++)
        {
        switch ($i) {
            case 0: if
            ($a == 0 and $a == null){}
              else{$demente .= "a";
                $creadote++;}
            break;
            case 1: if($b == ""){}else{$demente .="b";$creadote++;}
            break;
            case 2: if($info == ""){}else{$demente .= "c";$creadote++;}
            break;
            case 3: if($perotado == 0){}else{$demente .= "d";$creadote++;}
            break;
            case 4: if($tipo == ""){}else{$demente .= "e";$creadote++;}
            }
        }
        for ($n = 0; $n < $creadote; $n++)
        {
          array_push($array,substr($demente,$n,1));
            switch($array[$n])
            {
              case "a":
              $parte2 .= " AND Precio <= $a";
              break;
              case "b":
              switch($b)
              {
                case 1:
                $tipode = "VentaRenta = '1'";
                break;
                case 2:
                $tipode = "VentaRenta = '2'";
                break;
              }
              $parte2 .= " AND $tipode";
              break;
              case "c":
              $parte2 .= " AND direccion = '$info'";
              break;
              case "d":
              $parte2 .= " AND aprovado = '1'";
              break;
              case "e":
              $parte2 .= " AND Tipopropiedad = '$tipo'";
              break;
            }
        }
        }
        $consulta = $parte1.$parte2;
        $cs = mysql_query($consulta);
        while($row = mysql_fetch_array($cs)){
        //Inicio de bloque
            $valor = $row['IdInmueble'];
            echo   "<div class='row'><div class='col-sm-12'>
              <div class='well well-sm'>
                <div class='row'>
                  <div class='col-sm-6 col-md-4'>
                    <img height='150px' width='150px' src='".$row['Imagen']."' alt='' class='img-rounded img-responsive' />
                  </div>
                  <div class='col-sm-6'>

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
                    <i class='glyphicon glyphicon-info-sign'></i><a href='inmueble.php?IdInmueble=$valor'>".$lang['Informacion']."</a></p>
                    <div class='row'>
                    <div class='col-sm-12' >";

                    $formato = mysql_query("Select * From etiqueta where idinmueble ='$valor' ORDER BY `IdEtiqueta` ASC");
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
                      else {
                        $treta = 0;
                        $counter = 0;
                        $valor = explode("-",$confog['Valor']);
                        foreach($valor as $rock)
                        {
                          if($rock > 0)
                          {
                          $counter++;
                          }
                        }
                        switch ($confog['Netiqueta']) {
                          case 1: $varew = $lang['Cuartos']; $treta = $get1;
                          if($counter > 0 and $counter >= $treta);
                          {
                            echo $get1 ." ".$treta;
                          echo "<label class='label label-primary'>$varew : $counter</label>";
                          }
                          break;
                          case 2: $varew = $lang['Cocinas']; $treta = $get2;
                          if($counter > 0 and $counter >= $treta);
                          {
                          echo "<label class='label label-primary'>$varew : $counter</label>";
                          }
                          break;
                          case 3: $varew = $lang['Salas']; $treta = $get3;
                          if($counter > 0 and $counter >= $treta);
                          {
                          echo "<label class='label label-primary'>$varew : $counter</label>";
                          }
                          break;
                          case 4: $varew = $lang['Comedores']; $treta = $get4;
                          if($counter > 0 and $counter >= $treta);
                          {
                          echo "<label class='label label-primary'>$varew : $counter</label>";
                          }
                          break;
                          case 5: $varew = $lang['Baños']; $treta = $get5;
                          if($counter > 0 and $counter >= $treta);
                          {
                          echo "<label class='label label-primary'>$varew : $counter</label>";
                          }
                          break;
                        }


                      }
                    }
                  echo "</div></div></div>
                </div>
              </div>
            </div> </div>";
        //Fin de bloque
				}


				}




?>

<head>
   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
    <link href='css/estilo.css' rel='stylesheet'/>
    <title>Inicio</title>
</head>
<body id="intro">
<?php
    include("Header/barranav2.php");
?>
<br>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-body">
            <div class="row">
                <div class="row">
                    <div class="col-md-9">
                              <h2><?php echo $land['noticias'] ?></h2>
                    </div>
                    <div class="col-md-3">
                        <div class="controls pull-right hidden-xs">
                            <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example"
                                data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example"
                                    data-slide="next"></a>
                        </div>
                    </div>
                </div>
                <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php 
                    include ('Call/housein.php');
                    ?>         
                    </div>
                </div>		
            </div>
        </div>
    </div>      
</div>
<!-- Ni idea  de porque necesiro este div -->
</div>
<!-- Ni idea  de porque necesiro este div -->

    <div id="barrabusqueda9">
    </div>
  <!--  <div id="BarraLateral9">
        <p class="pD9">Barra Lateral</p>
    </div>
    <div id="contenido9">
        <?php /*
            include("conexion.php");
            mysql_query("SET NAMES 'utf8'");
            $know = "";
            $know2= "";
            //registros por pagina
            $registros = 5;
            @$pagina = $_GET ['pagina']; 
            if (!isset($pagina)) 
            { 
            $pagina = 1; 
            $inicio = 0; 
            } 
            else 
            { 
            $inicio = ($pagina-1) * $registros; 
            }
            $consulta = "select inmueble.*, tbusuario.nombre, tbusuario.apellido from inmueble  left join tbusuario on inmueble.Dueno = tbusuario.idUsuario ORDER BY IdInmueble ASC LIMIT ".$inicio." , ".$registros." ";
            //calculamos las paginas a mostrar 
            $contar = "SELECT * FROM inmueble"; 
            $contarok = mysql_query($contar); 
            $total_registros = mysql_num_rows($contarok); 
            $total_paginas = ($total_registros / $registros); 
            $total_paginas = ceil($total_registros / $registros); 

            $cs=mysql_query($consulta);
            echo"<table>";
            while($row=mysql_fetch_array($cs))
            {
                switch($row['VentaRenta']){
                    case 1: $know = $lang['Venta'];break;
                    case 2: $know =  $lang['Renta'];break;
                }
                switch($row['Tipopropiedad']){
                    case 1: $know2 = $lang['Rustico'];break;
                    case 2: $know2 =  $lang['Urbana'];break;
                }
                
                echo "
                <tr>
                    <td>
                       ".$lang['Codigo'].":".$row['IdInmueble']."<br><img width='150px' height='100px' class='imagenmost' src=".$row['Imagen']." 
                    </td>
                    <td>
                        <h2>".$know."</h2>
                    </td>
                    <td>
                        <p class='pD9'>$".$row['Precio'].".00</p>
                    </td>
                    <td>
                        <p>".$lang['Descripcion'].":</p><p class='pD9'>".$row['Descripcion']."</p>
                        <p>".$lang['Direccion'].": </p><p class='pD9'>".$row['Direccion']."</p>
                    </td>
                    <td>
                        <p class='pD9'>".$know2."</p>
                    </td>
                    <td>
                        <label>".$lang['Nombre'].":</label>
                        <p class='pD9'>".$row['nombre']."</p>
                        <p class='pD9'>".$row['apellido']."</p>
                    </td>
                </tr>
                ";

            }
            echo"</table>";
            echo "<center><p>"; 
            //creando los enlaces de paginacion de resultados
            if($total_registros>$registros){ 
            if(($pagina - 1) > 0) { 
            echo "<span class='pactiva'><a href='?pagina=".($pagina-1)."'>&laquo; Anterior</a></span> "; 
            } 
            // Numero de paginas a mostrar 
            $num_paginas=10; 
            //limitando las paginas mostradas 
            $pagina_intervalo=ceil($num_paginas/2)-1; 

            // Calculamos desde que numero de pagina se mostrara 
            $pagina_desde=$pagina-$pagina_intervalo; 
            $pagina_hasta=$pagina+$pagina_intervalo;
            // Verificar que pagina_desde sea negativo 
            if($pagina_desde<1){ // le sumamos la cantidad sobrante para mantener el numero de enlaces mostrados $pagina_hasta-=($pagina_desde-1); $pagina_desde=1; } // Verificar que pagina_hasta no sea mayor que paginas_totales if($pagina_hasta>$total_paginas){ 
            $pagina_desde-=($pagina_hasta-$total_paginas); 
            $pagina_hasta=$total_paginas; 
            if($pagina_desde<1){ 
            $pagina_desde=1; 
            } 
            } 

            for ($i=$pagina_desde; $i<=$pagina_hasta; $i++){ 
            if ($pagina == $i){ 
            echo "<span class='pnumero'>".$pagina."</span> "; 
            }else{ 
            echo "<span class='pactiva'><a href='?pagina=$i'>$i</a></span> "; 
            } 
            } 

            if(($pagina + 1)<=$total_paginas) { 
            echo " <span class='pactiva'><a href='?pagina=".($pagina+1)."'>Siguiente &raquo;</a></span>"; 
            } 
            } 
       */ ?>
    </div> -->
		<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
</body>

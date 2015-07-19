<?php
    include "../conexion.php";
    $idconvenio = $_GET['idconvenio'];
    $sql=("SELECT * FROM convenio WHERE idconvenio = '$idconvenio'");
    $rec=mysql_query($sql);
    while($crow = mysql_fetch_array($rec)){
        $oferta_final = $crow['oferta'];
        $adelanto = $crow['adelanto'];
        $diferencia = $oferta_final - $adelanto;
        //Plazo
        date_default_timezone_set("America/El_Salvador");
        $d1 = $crow['fecha_final'];
        $date1 = strtotime("Today");
        $d2 = date("Y-m-d",$date1);
        $fecha1 = (strtotime($d1)- strtotime($d2))/24/3600;
        $plazo = $fecha1;
        $idinmueble = $crow['idinmueble'];
        $ofertante = $crow['idusuario'];
        $comprador = "SELECT tbusuario.usuario, tbusuario.nombre, tbusuario.apellido,tbusuario.fechanac, usuario.* from tbusuario inner join usuario on tbusuario.idUsuario = usuario.TempId WHERE usuario.TempID = '$ofertante'";
        $comprador_con = mysql_query($comprador);
        while($urow = mysql_fetch_array($comprador_con)){
            $cnombre_completo = $urow['nombre']." ".$urow['apellido'];
            $ccredenciales = $urow['Credenciales'];
            $cdireccion = $urow['Direccion'];
            $cdui = $urow['DUI'];
            $cnit = $urow['NIT'];
            $cedad = floor((time() - strtotime($urow['fechanac'])) / 31556926);
            $inmueble = "SELECT * FROM inmueble WHERE IdInmueble = '$idinmueble'";
            $inmueble_con = mysql_query($inmueble);
            while($irow = mysql_fetch_array($inmueble_con)){
                $tipopropiedad = $irow['Tipopropiedad'];
                $direccion = $irow['Direccion'];
                $area = $irow['areadeterreno'];
                $vendedor = $irow['Dueno'];
                $iddueno = "SELECT tbusuario.usuario, tbusuario.nombre, tbusuario.apellido, tbusuario.fechanac, usuario.* from tbusuario inner join usuario on tbusuario.idUsuario = usuario.TempId WHERE usuario.TempID = '$vendedor'";
                $iddueno_con = mysql_query($iddueno);
                while($urow2 = mysql_fetch_array($iddueno_con)){
                    $vnombre_completo = $urow2['nombre']." ".$urow2['apellido'];
                    $vcredenciales = $urow2['Credenciales'];
                    $vdireccion = $urow2['Direccion'];
                    $vdui = $urow2['DUI'];
                    $vnit = $urow2['NIT'];
                    $vedad = floor((time() - strtotime($urow2['fechanac'])) / 31556926);
                    
                    //Imprimir formulario
                    echo "<br>Vendedor: ".$vnombre_completo;
                    echo "<br>Edad: ".$vedad;
                    echo "<br>Credenciales: ".$vcredenciales;
                    echo "<br>Direccion: ".$vdireccion;
                    echo "<br>DUI: ".$vdui;
                    echo "<br>NIT: ".$vnit;
                    echo "<br>Comprador: ".$cnombre_completo;
                    echo "<br>Edad:".$cedad;
                    echo "<br>Credenciales: ".$ccredenciales;
                    echo "<br>Direccion: ".$cdireccion;
                    echo "<br>DUI: ".$cdui;
                    echo "<br>NIT: ".$cnit;
                    if($tipopropiedad ==1){
                        echo "<br>Tipo Propiedad: Urbana";
                    }else{
                        echo "<br>Tipo Propiedad: Rustica";
                    }
                    echo "<br>Direccion: ".$direccion;
                    echo "<br>Area(M): ".$area;
                    echo "<br>Area(V): ".($area * 1.43426);
                    echo "<br>Inscrita por: ".$vnombre_completo;
                    echo "<br>Precio: $".$oferta_final;
                    echo "<br>Adelanto: $".$adelanto;
                    echo "<br>Diferencia: $".$diferencia;
                    echo "<br>Plazo: ".$plazo." dias.";
                }          
            }
        }
    }
    ?>
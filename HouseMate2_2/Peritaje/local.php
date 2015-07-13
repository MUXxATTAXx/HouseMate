<?php include "../conexion.php";
      include "../Call/Lenguaje/lenguaje.php" ;?>
<table data-toggle='table' id='here5' class='table table-striped table-hover negro'>
  <thead>
    <tr>
        <th><center>#</center></th>
        <th><center><?=$lang['peri-muni'];?></center></th>
        <th><center><?=$lang['peri-centro'];?></center></th>
        <th><center><?=$lang['peri-priva'];?></center></th>
        <th><center><?=$lang['peri-nopriva'];?></center></th>
        <th><center><?=$lang['peri-estado'];?></center></th>
    </tr>
  </thead>
    <tbody>
    <?php
        if(isset($_SESSION['lang'])){
            $idioma = $_SESSION['lang'];
            if($idioma == "es"){
                $idioma1 = "1";
            }
            elseif($idioma == "en"){
                $idioma1 = "2";
            }
        }else{
            $idioma1 = "1";
        }
            $desc = mysql_query("SELECT * FROM peritaje WHERE categoria ='5'");
            while($row = mysql_fetch_array($desc)){
            echo "<form action='#' method='POST'><tr>
                <td><center>".$row['id_peri']."</center></td>
                <td><center>";
                echo $row['nombre'];
                echo "</center></td>
                <td><center>".$row['valor1']."</center></td>
                <td><center>".$row['valor2']."</center></td>
                <td><center>".$row['valor3']."</center></td>";
                    echo "<td>";
                        if($row['estado'] == "1"){
                            echo "<center><span class='label label-warning'>".$lang['peri-estado1']."</span></center>";
                        }
                        else{
                            echo "<center><span class='label label-success'>".$lang['peri-estado2']."</span></center>";
                        }
                    echo "</td>";
                }
            echo "</tr></form>";
    ?>
    </tbody>
</table>

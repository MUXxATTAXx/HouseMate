<?php include "../conexion.php";
      include "../Call/Lenguaje/lenguaje.php" ;?>
<table data-toggle='table' id='here5' class='table table-striped table-hover negro'>
  <thead>
    <tr>
        <th><center>#</center></th>
        <th><center><?=$lang['peri-pared'];?></center></th>
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
            $desc = mysql_query("SELECT * FROM peritaje WHERE categoria ='5' and idioma = '$idioma1'");
            while($row = mysql_fetch_array($desc)){
            echo "<form action='#' method='POST'><tr>
                <td>".$row['id_peri']."</td>
                <td>";
                echo $row['nombre'];
                echo "</td>
                <td>".$row['valor1']."</td>
                <td>".$row['valor2']."</td>
                <td>".$row['valor3']."</td>";
                    echo "<td>";
                        if($row['estado'] == "1"){
                            echo "<span class='label label-warning'>".$lang['peri-estado1']."</span>";
                        }
                        else{
                            echo "<span class='label label-success'>".$lang['peri-estado2']."</span>";
                        }
                    echo "</td>";
                }
            echo "</tr></form>";
    ?>
    </tbody>
</table>

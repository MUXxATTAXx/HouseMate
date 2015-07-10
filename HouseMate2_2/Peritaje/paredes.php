<br> <?php include "../conexion.php";
      include "../Call/Lenguaje/lenguaje.php" ;?>
<table data-toggle='table' id='here' class='table table-striped table-hover negro'>
  <thead>
    <tr>
        <th><center>#</center></th>
        <th><center><?=$lang['peri-pared'];?></center></th>
        <th><center><?=$lang['peri-valor'];?></center></th>
        <th><center><?=$lang['peri-estado'];?></center></th>
    </tr>
  </thead>
    <tbody>
    <?php
        if($lang['Start'] == "Inicio"){
            $idioma1 = "1";
        }
        else
        {
            $idioma1 = "2";
        }
            $desc = mysql_query("SELECT * FROM peritaje WHERE categoria ='1' and idioma = '$idioma1'");

            while($row = mysql_fetch_array($desc)){
            echo "<form action='#' method='POST'><tr>
                <td>".$row['id_peri']."</td>
                <td>";
                echo $row['nombre'];
                echo "</td>
                <td>".$row['valor1']."</td>";
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



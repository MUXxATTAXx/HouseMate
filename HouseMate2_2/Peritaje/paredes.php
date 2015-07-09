<center>
        <br>
        <div class="row">
                <div class="col col-sm-2">
                    <center><label><?php echo $lang['peri-pared'];?></label></center>
                </div>
                <div class="col col-sm-4">
                    <input id="nombre_pared" class="form-control" type="text">
                </div>
                <div class="col col-sm-1">
                    <center><label><?php echo $lang['peri-valor'];?></label></center>
                </div>
                <div class="col col-sm-2">
                    <input id="valor_pared" class="form-control" type="text">
                </div>
                <div class="col col-sm-3">
                    <button type="button" class="btn btn-default" id="confirmar"><?=$lang['peri-agregar']?></button>
                </div>
        </div>
        <br>
    <div class="panel-footer">
        <div class="row row-centered">
            <div class="col col-sm-8">
                <table data-toggle='table' id='here' class='table table-striped table-hover negro'>
                  <thead>
                    <tr>
                        <th><center>#</center></th>
                        <th><center><?php echo $lang['peri-pared'];?></center></th>
                        <th><center><?php echo $lang['peri-valor'];?></center></th>
                        <th><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></th>
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
                            $desc = mysql_query("SELECT * FROM peritaje WHERE categoria ='1' and idioma = '$idioma1'");
                            while($row = mysql_fetch_array($desc)){
                            echo "<form action='#' method='POST'><tr>
                                <td>".$row['id_peri']."</td>
                                <td>";
                                echo $row['nombre'];
                                echo "</td>
                                <td>".$row['valor1']."</td>";
                                if($row['estado'] == "2"){
                                   echo "<td><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></td>"; 
                                }else{
                                    echo "<td><input type='submit' class='btn btn-warning'></td>";
                                }
                            echo "</tr></form>";
                            }
                    ?>
                    <tr><div id="resultadoinsert"></div></tr>
                    </tbody>
            </table>
            </div>
        </div>
    </div>
</center>


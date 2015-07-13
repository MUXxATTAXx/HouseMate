<?php include "../conexion.php";
      include "../Call/Lenguaje/lenguaje.php" ;?>
<center>
    <br>
    <div class='row'>
        <div class='col col-sm-2'>
          <h4>ID</h4>
        </div>
        <div class='col col-sm-2'>
          <h4><?=$lang['peri-categoria'];?></h4>
        </div>
        <div class='col col-sm-2'>
          <?=$lang['peri-pendiente'];?>
        </div>
        <div class='col col-sm-1'>
          <h4><?=$lang['peri-valor'];?></h4>
        </div>
    </div>
    <br>
</center>
<?php
    $usuario = $_SESSION['id'];
    if($lang['peri-valor'] == "Valor"){
        $pidioma = "1";
    }elseif($lang['peri-valor'] == "Value"){
        $pidioma = "2";
    }
    $objeto = "SELECT * from peritaje WHERE estado = '1' and creador != '$usuario' and idioma = '$pidioma'";
    $objeto_con = mysql_query($objeto);
  while($row = mysql_fetch_array($objeto_con)){
    switch($row['categoria']){
        case "1":
            $categoria = $lang['VP'];
        break;
        case "2":
            $categoria = $lang['TS'];
        break;
        case "3":
            $categoria = $lang['TT'];
        break;
        case "4":
            $categoria = $lang['DC'];
        break;
        case "5":
            $categoria = $lang['peri-local'];
        break;
    }
    echo"
    <center>
        <form action='mantenimiento_peritaje.php' method='POST'>
        <div class='row'>
            <div class='col col-sm-2'>
                <h4 id='id'>".$row['id_peri']."</h4>
            </div>
            <div class='col col-sm-2'>
              <p class='text-info'>".$categoria."</p>
            </div>
            <div class='col col-sm-2'>
              ".$row['nombre']."
            </div>
            <div class='col col-sm-1'>
              ".$row['valor1']."
            </div>
            <div class='col col-sm-2'>
                <button type='button' class='btn btn-default' name='".$row['id_peri']."'>".$lang['peri-modal1']."</button>
            </div>
            <div class='col col-sm-1'>
                <button type='button' class='btn btn-primary' id='aprobar'>".$lang['peri-modal2']."</button>
            </div>
            <div class='col col-sm-1'>
                <button type='button' class='btn btn-danger' id='eliminar''>".$lang['peri-modal3']."</button>
            </div>
        </div>
        </form>
        <br>
    </center>
    ";
  }
?>

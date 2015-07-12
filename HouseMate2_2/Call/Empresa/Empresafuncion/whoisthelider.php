<?php while($row = mysql_fetch_array($queryportodos))
{
?>
<br>
<span id="value" class="hidme"><?php echo $row['IdEmpresa'] ?></span>
<form method="post" action="Empresa.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >
        <div class="panel panel-info">
          <div id="what" class="panel-heading" style='
      padding-bottom: 0px;
      border-bottom-width: 0px;'>
          <ul  class="nav nav-tabs forcenavchange">
      <?php
      $queroempresario = "SELECT tbusuario.nombre, tbusuario.apellido, tbusuario.correo, usuario.Rating,tbusuario.usuario FROM usuario inner join
      tbusuario on usuario.TempId = tbusuario.IdUsuario inner join empresa on usuario.Empresa = empresa.IdEmpresa WHERE
      usuario.idusuario = empresa.dueño AND Empresa.IdEmpresa ='".$row['IdEmpresa']."' AND usuario.TempId = '$idt'";
      $master = mysql_query($queroempresario);
      $idempresa = $row['IdEmpresa'];
      echo " <span class='hidme' id='sendvalueid' name='empresidp'>$idempresa</span>";
      $idempresalater = $idempresa;
      if(mysql_num_rows($master) > 0)
      {
        echo "<li id='me' class='active negro'><a href='#home' data-toggle='tab'>".$lang['Inicio']."</a></li>
        <li id='me2' class='negro'><a href='#socios' data-toggle='tab'>".$lang['miembros']."</a></li>
        <li id='me3' class='negro' ><a href='#solicitud' data-toggle='tab'>".$lang['Solicitud']."</a></li>
        <li id='me4' class='negro'><a href='#configurar' data-toggle='tab'>".$lang['Config']."</a></li>
        <li id='me5' class='negro'><a href='#informacion' data-toggle='tab'>".$lang['Informacion']."</a></li>";
      }
      else
      {
        echo "<li id='me' class='active negro'><a href='#home' data-toggle='tab'>".$lang['Inicio']."</a></li>
        <li id='me2' class='negro'><a href='#socios' data-toggle='tab'>".$lang['miembros']."</a></li>
        <li id='me3' class='negro'><a href='#informacion' data-toggle='tab'>".$lang['Informacion']."</a></li>";
      }
      ?>
    </ul>
          </div>
          <div class="panel-body">
    <div id='myTabContent' class='tab-content'>
      <?php
      if(mysql_num_rows($master) > 0)
      {
      echo "
        <div class='tab-pane fade active in' id='home'>";
          include "Call/Empresa/Empresafuncion/messageboard.php";
          echo"</div>
        <div class='tab-pane fade' id='socios'>
          <div>
            <div id='thetablemiembre'>
          </div>
          </div>
            <div id='resultborrar'>
          </div>
        </div>";

        echo "<div class='tab-pane fade' id='solicitud'>
          <div class='row row-centered'>";
              include 'Call/Empresa/Empresafuncion/verusuario.php';
          echo "</div>
          <div id='morepeople'>
          </div>
        </div>
        <div class='tab-pane fade' id='configurar'>
          <div class='row row-centered'>";
          include "Call/Empresa/Empresafuncion/configurar.php";
          echo "</div>
        </div>";
      }
        else {
          echo "
            <div class='tab-pane fade active in' id='home'>";
              include "Call/Empresa/Empresafuncion/messageboard2.php";
              echo"</div>
            <div class='tab-pane fade' id='socios'>
              <div>
                <div id='thetablemiembre2'>
              </div>
            </div>
            </div>";
            echo "<div class='tab-pane fade' id='solicitud'>
              <div class='row row-centered'>";
                  include 'Call/Empresa/Empresafuncion/verusuario2.php';
              echo "</div>
              <div id='morepeople'>
              </div>
            </div>";
        }
        ?>
        <div class="tab-pane fade" id="informacion">
          <?php include "Call/Empresa/informacion.php" ?>
        </div>
      </div>
          </div>
               <div class="panel-footer">
           </div>
        </div>
      </div>
    </div>
  </form>



<?php
}
include_once  "Call/Empresa/Empresafuncion/extrastuff.php";
?>

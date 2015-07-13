<div class="panel-heading">
          <div class="row">
      <div class="col-sm-4">
        <h3 class="panel-title label label-primary"><?php echo $lang['ME'] ?></h3>
      </div>
      <div class="form-group col-sm-6">
        <label><?php echo $lang['Nombre'] ?>:</label>
        <input name="nombre" id="nameauto" onchange='changed()' value='<?= $row['nombre'] ?>' class="form-control" maxlength="30">
      </div>
    </div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-4 col-lg-4 " align="center">
        <div class="row">
          <div class="form-group col-xs-12">
            <img class="img-responsive imagenpequeña" id="imagenempresa" src="<?php $filename = "../../img/Empresas/".$row['imagen'];
              if(file_exists($filename))
              {
                $hayimagen = "img/Empresas/".$row['imagen'];
                $tempnamefalse = $row['imagen'];
                echo "img/Empresas/".$row['imagen'];
              }
              else
              {
                $hayimagen = "";
                echo "https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100";
              }?>">
          </div>
          <div class="form-group col-xs-12">
            <div class="btn btn-primary btn-file">
              <i class="glyphicon glyphicon-folder-open"></i><?php echo $lang['Buscar3'] ?>
              <input type="file" class="file" onchange="readURL(this)" name="file" >
            </div>
          </div>
          <div class="form-group col-xs-12">
            <label>*NIT:</label>
            <input name="nit" class="form-control" value='<?= $row['nit'] ?>' maxlength="14">
          </div>
        </div>
      </div>
              <div class=" col-md-8 col-lg-8 ">
        <div class="row">
        </div>
        <div class="row">
          <div class="form-group col-xs-6">
            <label>*<?php echo $lang['tel'] ?>:</label>
            <input name="telefono" class="form-control" value='<?= $row['telefono'] ?>' maxlength="8">
          </div>
          <div class="form-group col-xs-6">
            <label><?php echo $lang['tel2'] ?>:</label>
            <input name="telefono2" class="form-control" value='<?= $row['telefono2'] ?>' maxlength="8">
          </div>
        </div>
        <div>
          <?php include "select4.php";
          $casa = explode(", ", $row['direccion']);
          echo "<script type='text/javascript'>
          $('#Departamento3').val('".$casa[1]."');
          $('#Municipio3').val('".$casa[0]."');
          </script>"; ?>

          <script src='js/jquery-1.11.2.min.js' type='text/javascript'></script>
          <script type="text/javascript" src="js/jquery.chained.js" charset="utf-8"></script>
          <script type="text/javascript">
           $(function() {
          $("#Municipio3").chained("#Departamento3");
          });
          </script>
        </div>
        <div class="row">
          <div class="form-group col-xs-12">
            <label><?php echo $lang['Descripcion'] ?>:</label>
            <textarea name="descripcion" class="form-control"  maxlength="140"><?= $row['descrip'] ?></textarea>
          </div>

        </div>
              </div>
            </div>
     </div>

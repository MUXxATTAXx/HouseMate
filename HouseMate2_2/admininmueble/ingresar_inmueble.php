<form id="formenow" method="post" enctype="multipart/form-data">
 <div class='Form-D1' align="center">
<!--  falta -->
<div class="">
<div class="col-sm-10 col-centered negro">
<div id="cosas">
 <div class="center">
					<h3><?php echo $lang['Informacion'] ?>:</h3>
		</div>
<div class="row row-centered">
  <div class="form-group col-sm-6">
    <div class="row">
    	<div class="form-group col-sm-6">
    		<label><?php echo $lang['vr'] ?>:</label>
    			<select id="selector" name="selector" class='form-control whitecover'>
    				<option value="0"><?php echo $lang['Nada'] ?></option>
    				<option value="1"><?php echo $lang['Venta']?></option>
    				<option value="2"><?php echo $lang['Renta']?></option>
    			</select>
    	</div>

  	<div class="form-group col-sm-6">
  			  <label><?php echo $lang['tm'] ?>:</label>
  			</span><select id="selector2" name="selector2" class='form-control whitecover'>
  				<option value="0"><?php echo $lang['Nada'] ?></option>
  				<option value="1"><?php echo $lang['Rustico']?></option>
  				<option value="2"><?php echo $lang['Urbana']?></option>
  			</select>
  	</div>
    <div class="row row-centered">
    	<center>
    		<?php include ("Call/Funciones/select.php") ?>
    	</center>
    </div>
      <div class="row row-centered">
        <div class="form-group col-sm-6">
        <label><?php echo $lang['Precio']?>:</label>
      		<div class="input-group">
      			 <span class="input-group-addon label-info">$</span>
      			 <input onkeypress="return num(event)" type="number" class='form-control' min="0" step="1" id="precio" name="precio" placeholder='<?php echo $lang['Precio']?>'>
      			 <span class="input-group-addon label-info">.00</span>
      		</div>
        </div>
        <div class="form-group col-sm-6">
          <label><?= $lang['Status'] ?>:</label>
          <select class="form-control whitecover" name="estado" id="estado">
          <option value="0"><?= $lang['Nada']?></option>
        <?php for($i = 1 ; $i < 10; $i++)
        {
          $var = 'esta'.$i;
          echo "<option value='$i'>".$lang[$var]."</option>";
        } ?>
      </select>
        </div>
      </div>
      <div class="row row-centered">
        <div class="form-group col-sm-6">
          <label><?php echo $lang['age']?>:</label>
          <input onkeypress="return num(event)" type="number" class='form-control' min="0" max="75" step="1" id="age" name="age" placeholder='<?php echo $lang['ages']?>'>
        </div>
      </div>
    </div>
  </div>
	<!-- la mitad	-->
<div class="row">
<div class="form-group col-sm-6">
  <div class="row row-centered">
      <center>
  		<div class="form-group col-xs-12">
  		<label><?php echo $lang['Direccion'] ?>:</label>
  			<input rows="2" class='form-control' type='text' id='dirrecion' name="dirrecion"  placeholder='<?php echo $lang['Direccion'] ?>'></input>
  	</div>
      </center>
  	<center>
  		<div class="form-group col-xs-12">
  		<label><?php echo $lang['Descripcion'] ?>:</label>
  	<input rows="2" class='form-control' type='text' id='descrip' name="descrip" placeholder='<?php echo $lang['Descripcion'] ?>'></input>
  	</div>
  	</center>
  </div>
   <div class="row row-centered">
    <div class="form-group col-sm-6 ">
    <label><?php echo $lang['area1']?>:</label>
      <div class="input-group">
         <span class="input-group-addon label-info"></span>
         <input onkeypress="return num(event)" type="number" class='form-control' min="0" step="1" id="AT" name="AT" placeholder='<?php echo $lang['are']?>'>
         <span class="input-group-addon label-info">v^2</span>
      </div>
    </div>
    <div class="form-group col-sm-6">
    <label><?php echo $lang['area2']?>:</label>
      <div class="input-group">
         <span class="input-group-addon label-info"></span>
         <input onkeypress="return num(event)" type="number" class='form-control' min="0" step="1" id="AR" name="AR" placeholder='<?php echo $lang['are']?>'>
         <span class="input-group-addon label-info">m^2</span>
      </div>
    </div>
  </div>
</div>
</div>
    <div class="center">
					<h3><?php echo $lang['Etiqueta'] ?>: </h3><span class="label label-danger" id="validacion-num1"></span>
			</div>
<!-- 24579 -->
<div class="row row-centered">
	<div class="col-sm-10 col-centered">
		<ul id="what2" class="nav nav-tabs">

			<li id="yu" class='active negro'><a href='#yui' data-toggle='tab'><?php echo($lang['NoTa']);?></a></li>
			<li id="yu2" class="negro"><a href='#yui2' data-toggle='tab'><?php echo($lang['NoTa2']);?></a></li>
		</ul>
	</div>
</div>
<div id='taber' class='tab-content negro2'>
<div id="yui" class='tab-pane fade active in'>
		<div class="row">
      <div class="col-sm-12">
        	<div class="form-group col-sm-1">
          </div>
  			<div class="form-group col-sm-2">
  				<div class="[ form-group ]">
  					<label><?php echo $lang['Cuartos'] ?>:</label>
  						<br>
  					<input type="checkbox" name="fancy-checkbox-primary-custom-icons1" id="fancy-checkbox-primary-custom-icons1" autocomplete="off" value="1" />
  					<div class="[ btn-group ]">
  						<label for="fancy-checkbox-primary-custom-icons1" class="[ btn btn-primary ]">
  							<span class="[ glyphicon glyphicon-ok ]"></span>
  							<span class="[ glyphicon glyphicon-minus ]"></span>
  						</label>
  						<input id="tag1" onchange="creatediv(this.id)" onkeypress="return num(event);" for="fancy-checkbox-primary-custom-icons" class="form-control widther [ btn btn-default active ] " id="a1" name="a1" type="number"  maxlength="2"  min="0" max="10" placeholder='<?php echo $lang['Cuartos']?>'>
  						<div id="tager1"></div>
              <div>
              <input type="hidden" name="A1gate1" id="A1gate1" value="0">
              <input type="hidden" name="B1gate2" id="B1gate1" value="0">
              <input type="hidden" name="C1gate3" id="C1gate1" value="0">
              <input type="hidden" name="D1gate4" id="D1gate1" value="0">
              <input type="hidden" name="E1gate5" id="E1gate1" value="0"></div>
              </div>
  				</div>
  			</div>
        <div class="form-group col-sm-2">
          <div class="[ form-group ]">
            <label><?php echo $lang['Cocinas'] ?>:</label>
              <br>
            <input type="checkbox" name="fancy-checkbox-primary-custom-icons2" id="fancy-checkbox-primary-custom-icons2" autocomplete="off" value="1"/>
            <div class="[ btn-group ]">
              <label for="fancy-checkbox-primary-custom-icons2" class="[ btn btn-primary ]">
                <span class="[ glyphicon glyphicon-ok ]"></span>
                <span class="[ glyphicon glyphicon-minus ]"></span>
              </label>
              <input id="tag2" onchange="creatediv(this.id);" onkeypress="return num(event);" for="fancy-checkbox-primary-custom-icons" class="form-control widther [ btn btn-default active ]" id="a2" name="a2" type="number" min="0" max="10" placeholder='<?php echo $lang['Cocinas'] ?>'>
              <div id="tager2"></div>
              <div >
                <input type="hidden" name="A2gate1" id="A2gate1" value="0">
                <input type="hidden" name="B2gate2" id="B2gate2" value="0">
                <input type="hidden" name="C2gate3" id="C2gate3" value="0">
                <input type="hidden" name="D2gate4" id="D2gate4" value="0">
                <input type="hidden" name="E2gate5" id="E2gate5" value="0"></div>
            </div>
          </div>
        </div>
			<div class="form-group col-sm-2">
				<div class="[ form-group ]">
					<label><?php echo $lang['Comedores'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-primary-custom-icons3" id="fancy-checkbox-primary-custom-icons3" autocomplete="off" value="1"/>
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-primary-custom-icons3" class="[ btn btn-primary ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input id="tag3" onchange="creatediv(this.id)" onkeypress="return num(event);" for="fancy-checkbox-primary-custom-icons" class="form-control widther [ btn btn-default active ]" id="a3"  name="a3" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Comedores'] ?>'>
					<div id="tager3"></div>
          <div class="hidme">
            <input type="hidden" name="A3gate1" id="A3gate1" value="0">
            <input type="hidden" name="B3gate2" id="B3gate2" value="0">
            <input type="hidden" name="C3gate3" id="C3gate3" value="0">
            <input type="hidden" name="D3gate4" id="D3gate4" value="0">
            <input type="hidden" name="E3gate5" id="E3gate5" value="0"></div>
          </div>
				</div>
			</div>
			<div class="form-group col-sm-2">
				<div class="[ form-group ]">
					<label><?php echo $lang['Salas'] ?>:</label>
						<br>
					<input type="checkbox" name="fancy-checkbox-primary-custom-icons4" id="fancy-checkbox-primary-custom-icons4" autocomplete="off" value="1"/>
					<div class="[ btn-group ]">
						<label for="fancy-checkbox-primary-custom-icons4" class="[ btn btn-primary ]">
							<span class="[ glyphicon glyphicon-ok ]"></span>
							<span class="[ glyphicon glyphicon-minus ]"></span>
						</label>
						<input id="tag4" onchange="creatediv(this.id)"  onkeypress="return num(event);" for="fancy-checkbox-primary-custom-icons" class="form-control widther [ btn btn-default active ]" id="a4"  name="a4" type="number"  min="0"  max="10" class="form-control" placeholder='<?php echo $lang['Salas'] ?>'>
					<div id="tager4"></div>
          <div class="hidme">
            <input type="hidden" name="A4gate1" id="A4gate1" value="0">
            <input type="hidden" name="B4gate2" id="B4gate2" value="0">
            <input type="hidden" name="C4gate3" id="C4gate3" value="0">
            <input type="hidden" name="D4gate4" id="D4gate4" value="0">
            <input type="hidden" name="E4gate5" id="E4gate5" value="0"></div>
          </div>
				</div>
      </div>
			<div class="form-group col-sm-2">
					<div class="[ form-group ]">
						<label><?php echo $lang['Baños'] ?>:</label>
							<br>
						<input type="checkbox" name="fancy-checkbox-primary-custom-icons5" id="fancy-checkbox-primary-custom-icons5" autocomplete="off" value="1"/>
						<div class="[ btn-group ]">
							<label for="fancy-checkbox-primary-custom-icons5" class="[ btn btn-primary ]">
								<span class="[ glyphicon glyphicon-ok ]"></span>
								<span class="[ glyphicon glyphicon-minus ]"></span>
							</label>
							<input id="tag5" onchange="creatediv(this.id)" onkeypress="return num(event);" for="fancy-checkbox-primary-custom-icons" class="form-control widther [ btn btn-default active ]" id="a5" name="a5" type="number" min="0" max="10" class="form-control" placeholder='<?php echo $lang['Baños'] ?>'>
						<div id="tager5"></div>
            <div class="hidme">
              <input type="hidden" name="A5gate1" id="A5gate1" value="0">
              <input type="hidden" name="B5gate2" id="B5gate2" value="0">
              <input type="hidden" name="C5gate3" id="C5gate3" value="0">
              <input type="hidden" name="D5gate4" id="D5gate4" value="0">
              <input type="hidden" name="E5gate5" id="E5gate5" value="0"></div>
            </div>
					</div>
			</div>
</div>
  </div>
</div>
<!-- parte 2 -->
<div id="yui2" class='tab-pane'>
    <div class="row">
  <div class="col-sm-2">
  <div class="[ form-group ]">
    <label><?php echo $lang['Terraza'] ?>:</label>
      <br>
    <input onchange="changef(1)" type="checkbox" name="fancy-checkbox-primary-custom-icons6" id="fancy-checkbox-primary-custom-icons6" autocomplete="off" value="1"/>
    <div class="[ btn-group ]" >
      <label for="fancy-checkbox-primary-custom-icons6" class="[ btn btn-primary ]">
        <span class="[ glyphicon glyphicon-ok ]"></span>
        <span class="[ glyphicon glyphicon-minus ]"></span>
      </label>
    </div>
  </div>
</div>
<div class="col-sm-4 hidme" id="chage1">
  <label><?php echo $lang['are']?>:</label>
    <div class="input-group" id="chage1">
       <span class="input-group-addon label-info"></span>
       <input value="0" onkeypress="return num(event)" type="number" class='form-control' min="0" step="1" id="areax1" name="areax1" placeholder='<?php echo $lang['are']?>'>
       <span class="input-group-addon label-info">m^2</span>
    </div>
</div>

  <div class="col-sm-2">
    <div class="[ form-group ]">
      <label><?php echo $lang['Piscinas'] ?>:</label>
        <br>
      <input onchange="changef(2)" type="checkbox" name="fancy-checkbox-primary-custom-icons7" id="fancy-checkbox-primary-custom-icons7" autocomplete="off" value="1"/>
      <div class="[ btn-group ]">
        <label for="fancy-checkbox-primary-custom-icons7" class="[ btn btn-primary ]">
          <span class="[ glyphicon glyphicon-ok ]"></span>
          <span class="[ glyphicon glyphicon-minus ]"></span>
        </label>


      </div>
    </div>
  </div>
  <div class="col-sm-4 hidme" id="chage2">
    <label><?php echo $lang['are']?>:</label>
      <div class="input-group" id="chage2">
         <span class="input-group-addon label-info"></span>
         <input value="0" onkeypress="return num(event)" type="number" class='form-control' min="0" step="1" id="areax2" name="areax2" placeholder='<?php echo $lang['are']?>'>
         <span class="input-group-addon label-info">m^2</span>
      </div>
  </div>
  <div class="col-sm-2">
    <div class="[ form-group ]">
      <label><?php echo $lang['Jardines'] ?>:</label>
        <br>
      <input onchange="changef(3)" type="checkbox" name="fancy-checkbox-primary-custom-icons8" id="fancy-checkbox-primary-custom-icons8" autocomplete="off" value="1"/>
      <div class="[ btn-group ]">
        <label for="fancy-checkbox-primary-custom-icons8" class="[ btn btn-primary ]">
          <span class="[ glyphicon glyphicon-ok ]"></span>
          <span class="[ glyphicon glyphicon-minus ]"></span>
        </label>

      </div>
    </div>
  </div>
  <div class="col-sm-4 hidme" id="chage3">
    <label><?php echo $lang['are']?>:</label>
      <div class="input-group" >
         <span class="input-group-addon label-info"></span>
         <input value="0" onkeypress="return num(event)" type="number" class='form-control' min="0" step="1" id="areax3" name="areax3" placeholder='<?php echo $lang['are']?>'>
         <span class="input-group-addon label-info">m^2</span>
      </div>
  </div>
  <div class="col-sm-2">
    <div class="[ form-group ]">
      <label><?php echo $lang['Cocheras'] ?>:</label>
        <br>
      <input onchange="changef(4)" type="checkbox" name="fancy-checkbox-primary-custom-icons9" id="fancy-checkbox-primary-custom-icons9" autocomplete="off" value="1"/>
      <div class="[ btn-group ]">
        <label for="fancy-checkbox-primary-custom-icons9" class="[ btn btn-primary ]">
          <span class="[ glyphicon glyphicon-ok ]"></span>
          <span class="[ glyphicon glyphicon-minus ]"></span>
        </label>

      </div>
    </div>
  </div>
  <div class="col-sm-4 hidme" id="chage4">
    <label><?php echo $lang['are']?>:</label>
      <div class="input-group" >
         <span class="input-group-addon label-info"></span>
         <input value="0" onkeypress="return num(event)" type="number" class='form-control' min="0" step="1" id="areax4" name="areax4" placeholder='<?php echo $lang['are']?>'>
         <span class="input-group-addon label-info">m^2</span>
      </div>
  </div>

  <div class="col-sm-2">
      <div class="[ form-group ]">
        <label><?php echo $lang['Sotanos'] ?>:</label>
          <br>
        <input onchange="changef(5)" type="checkbox" name="fancy-checkbox-deafualt-custom-icons10" id="fancy-checkbox-primary-custom-icons10" autocomplete="off" value="1"/>
        <div class="[ btn-group ]">
          <label for="fancy-checkbox-primary-custom-icons10" class="[ btn btn-primary ]">
            <span class="[ glyphicon glyphicon-ok ]"></span>
            <span class="[ glyphicon glyphicon-minus ]"></span>
          </label>

        </div>
      </div>
    </div>
    <div class="col-sm-4 hidme" id="chage5">
      <label><?php echo $lang['are']?>:</label>
        <div class="input-group" >
           <span class="input-group-addon label-info"></span>
           <input value="0" onkeypress="return num(event)" type="number" class='form-control' min="0" step="1" id="areax5" name="areax5" placeholder='<?php echo $lang['are']?>'>
           <span class="input-group-addon label-info">m^2</span>
        </div>
    </div>
    </div>
    </div>
  </div>
</div>
<br>
<hr>
<div class="row row-centered">
    <div class="col-sm-12 col-centered">
    <center><label><?php echo $lang['Imagen']  ?>:</label></center>
    <div  class="onlyme">
    <label>
    <?php echo $lang['selectp']; ?>
      <input  class='form-control imagenfea' type='file' onchange="readURL(this);" name='imagenfea'/>
    </label>
    </div>
    <br>
    <center><img id="blah" class="img-responsive" alt="Responsive image" src="#" alt="<?php echo $lang['Imagese'] ?>" /></center>
    <br>

    <br>
  </div>

<br>

<span id="resultadoinsert"  class="row">
  </span>
  <br>
  <div class="row">
  <div class="col-sm-6 col-centered">
      <a class='btn btn-primary btn-block ingresarin' type='submit' value="Insert"><?php echo $lang['Verificar']?></a>
  <?php
    if(isset($_POST['insertarforreal']))
    {
      require "Call/Funciones/beforeingresar.php";

    }
    else
    {
    }
  ?>
  </div>
  </div>
  <br>
  <span id="resultadoinsert"  class="row">
    </span>
  </div>
  </div>
  </div>
  <script>
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
  //comprobamos si se pulsa una boton
    $(".ingresarin").click(function(){
    unison();
  });
  $(".ingresarin").click(function(){
    unison();

  });
  $("form").on('click', 'a.ingresarin2', function() {
    unison();
  });
  function creatediv(id){
    var x = id.slice(-1);
    var  z = document.getElementById(id).value;
    if(z > 5)
    {
      z = 5;
      document.getElementById(id).value = 5;
    }
    var c = "#tager"+x;
    $.ajax({
      url: "Call/Funciones/createtag.php",
      data:  "amount="+z+"&id="+x,
      dataType : "html",
      type : "post",
      success: function(data){
          $(c).empty();
          $(c).append(data);
      },
      failure: function(){

      }
    });
  }
  function manipular(id)
  {
   var x = id.slice(-1);
   var s = id.substr(0, 1);
   var l = id.substr(1,1);
   switch (x) {
case "1":
l = "A";
break;
case "2":
l = "B";
break;
case "3":
l = "C";
break;
case "4":
l = "D";
break;
case "5":
l = "E";
break;
     default:

   }
   var valor1 = document.getElementById(id).value;
   var combo = l+s+"gate"+x;
   document.getElementById(combo).value = valor1;
  }
  function unison(){
  $("#poderdej").remove();
  selector = $("#selector").val();
  selector2 = $("#selector2").val();
  precio = $("#precio").val();
  Departamento = $("#Departamento").val();
  Municipio = $("#Municipio").val();
  dirrecion = $("#dirrecion").val();
  descrip = $("#descrip").val();
  imagenfea = $("#imagenfea").val();
  at = $("#AT").val();
  ar = $("#AR").val();
  estado = $("#estado").val();
  age = $("#age").val();
  $.ajax({
    url: "Call/Funciones/ingresarin.php",
    data:  "selector="+selector+"&selector2="+selector2+"&precio="+precio+"&Departamento="+Departamento+"&Municipio="+Municipio+
    "&dirrecion="+dirrecion+"&descrip="+descrip+"&imagenfea="+imagenfea+"&AT="+at+"&AR="+ar+"&estado="+estado+"&age="+age,
    dataType : "html",
    type : "post",
    success: function(data){
      $("#error1").remove();
      $(".ingresarin").remove();
      $("#resultadoinsert").empty();
      $("#resultadoinsert").append(data);
    },
    failure: function(){

    }
  });
  };
  function changef(id)
  {
    var changec = document.getElementById("chage"+ id).className;
    if (changec == "col-sm-4 hidme")
    {
      document.getElementById("chage"+ id).className = "col-sm-4";
    }
    else {
      document.getElementById("chage"+ id).className = "col-sm-4 hidme";
    }
  }
  </script>
</div>
</div>
</form>

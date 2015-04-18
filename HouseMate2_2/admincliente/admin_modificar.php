<div class='form-Dl' align='center'> 
    
    <form action="#" method="POST">
	<div class="row">
	<label><?php echo $lang['Codigo'] ?>:</label>
		<div class="col-sm-2 col-centered">  
			<input id="thestart" class='form-control' type='number' autocomplete="off" onchange="myFunction()" placeholder="<?php echo $lang['Codigo'] ?>"/>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-6 col-centered">
			<label><?php echo $lang['Nombre']; ?>: </label>
				<input id="b2" class='form-control' maxlength='20' type='text' name='nombre2' placeholder='<?php echo $lang['Nombre']; ?>' autocomplete="off"/>
		</div>
		<div class="col-sm-6 col-centered">
			<label><?php echo $lang['Apellido'];?>: </label>
				<input id="b3" class='form-control' maxlength='20' type='text' name='apellido2' placeholder='<?php echo $lang['Apellido']?>' autocomplete="off"/>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-centered">
			<label>E-mail </label>
			<input id="b1" class='form-control' type='email' name='correo2' placeholder='E-mail' autocomplete="off" />
		</div>
		<div class="col-sm-3 col-centered">
			<label><?php echo $lang['Fecha-Nac']; ?>:</label>
			<input id="b4" class='form-control' type='date' name="fechanac2" autocomplete="off"/>
		</div>
		<div class="col-sm-3 col-centered">
		<label><?php echo $lang['Tipous'] ?>: </label>
			<select id="b6" class="form-control" name="tiposu">
				<option value="0"><?php echo $lang['Nada'] ?></option>
				<option value="1"><?php echo $lang['Admin'] ?></option>
				<option value="2"><?php echo $lang['Cliente'] ?> </option>
				<option value="3"><?php echo $lang['Perito'] ?> </option>
				<option value="4"><?php echo $lang['Agente'] ?> </option>
			</select>
		</div>
	</div>
    <div class="row">
		<div class="col-sm-4 col-centered">
		<br>
		<label><?php echo $lang['Contra-reset']; ?>: </label>
			<input id="b5" type='checkbox' class="checkbox-inline" name='contraprevia' placeholder='<?php echo $lang['Contra-nueva']; ?>' autocomplete="off"/>
		</div>
		
	</div>
	<br>
	<div class="col-sm-6 col-centered">
	
		<button class='btn btn-primary btn-block' type='submit' name='registrar2' value="modificar" ><?php echo $lang['Modificar-Usuario'] ?></button>
		</div>
<script>
function myFunction() {
    var infor = document.getElementById("thestart").value;
	var table = document.getElementById("here");
	var row = table.rows[infor];
	var uno = row.cells[1].innerHTML;
	var dos = row.cells[2].innerHTML;
	var tres = row.cells[3].innerHTML;
	var cuatro = row.cells[4].innerHTML;
	// var seis = row.cells[6].innerHTML;
	var elem1 = document.getElementById("b3");
	var elem2 = document.getElementById("b2");
	var elem3 = document.getElementById("b1");
	var elem4 = document.getElementById("b4");
	// var elem5 = document.getElementById("b6");
	if(infor == 0)
	{
		
	}
	else
	{
	elem1.value = uno;
	elem2.value = dos;
	elem3.value = tres;
	elem4.value = cuatro;
	// elem6.value = seis;
	}
	}
</script>

    <?php
echo("
    <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
    ");
    include("conexion.php");
    mysql_query("SET NAMES 'utf8'");
    //Se validan si no son nulos los inputs
	if(isset($_POST['registrar2']))
	{
	if($_POST['registrar2'] == "modificar")
		{
		
    if(isset($_POST['nombre2']) || isset($_POST['apellido2']) || isset($_POST['fechanac2']) || isset($_POST['correo2'])  || isset($_POST['tiposu']) )
    {
		
		$maxc = 0;
		$man="";
        $a = $_POST['correo2'];
        $b = $_POST['nombre2'];
        $c = $_POST['apellido2'];
        $d = $_POST['fechanac2'];
		$e = "00000";
		$f = $_POST['tiposu'];
		$g = 0;
		$copilation = "UPDATE tbUsuario SET";
		$Where ="WHERE correo ='$a'";


			for ($i=1;$i <=5;$i++) 
			{
					switch ($i)
					{
						case 1:
						if ($b != "" || $b != null)
						{
							$maxc++;
							$man .= "b";
						}
						break;
						case 2:
						if ($c != "" || $c != null)
						{
							$maxc++;
							$man .= "c";
						}
						break;
						case 3:
						if ($d != "" || $d != null)
						{
							$maxc++;
							$man .= "d";
						}
						break;
						case 4:
						if (isset($_POST['contraprevia']))
						{
							$maxc++;
							$man .= "e";
						}
						break;
						case 5:
						if ($f != "" || $f != null)
						{
							switch($f)
							{
								case 0:
								break;
								case 1:
								$g = 1;
								$maxc++;
								$man .= "f";
								break;
								
								case 2:
								$g = 2;
								$maxc++;
								$man .= "f";
								break;
								
								case 3:
								$g = 3;
								$maxc++;
								$man .= "f";
								break;
								
								case 4:
								$g = 4;
								$maxc++;
								$man .= "f";
								break;
							}
							
						}
						break;
					}
			}
			$array = array();
			$final_string ="";
			for ($n = 0; $n < $maxc; $n++)
			{
				array_push($array,substr($man,$n,1));
				if($n == $maxc-1)
				{
					switch($array[$n])
					{
					case "b":
					$final_string .= " nombre='".$b."' ";
					break;
					case "c":
					$final_string .= " apellido='".$c."' ";
					break;
					case "d":
					$final_string .= " fechanac='".$d."' ";
					break;
					case "e":
					$final_string .= " contra='".$e."' ";
					break;
					case "f":
					$final_string .= " tipo='".$f."' ";
					break;
					}
				}
				else
				{
					switch($array[$n])
					{
					case "b":
					$final_string .= " nombre='".$b."',"; 
					break;
					case "c":
					$final_string .= " apellido='".$c."',";
					break;
					case "d":
					$final_string .= " fechanac='".$d."',";
					break;
					case "e":
					$final_string .= " contra='".$e."',";
					break;
					case "f":
					$final_string .= " tipo='".$f."',";
					break;
					}

				}
			}
			$nomina = "";
			$nomina .= $copilation;
			$nomina .= $final_string;
			$nomina .= $Where;
			$consultaq=mysql_query($nomina);
			echo "<script> 
			location.replace('cliente_mantenimiento.php?actualstand=3'); 
			</script>";
		}
		}
	}

else
{
    
}

?>
       
        </div>  
<?php
    mysql_query("SET NAMES 'utf8'");
    $consulta = "SELECT * FROM tbusuario where idUsuario > '0'";
    $cs=mysql_query($consulta);
   echo"<table class='table table-striped table-hover ' border=1px>";
        echo"<tr><td><b>";
		echo $lang['Codigo'];
		echo '</b></td><td><b>';
		echo $lang['Nombre'];
		echo "</b></td><td><b>";
		echo $lang['Apellido'];
		echo "</b></td><td><b>";
		echo $lang['Correo'];
		echo "</b></td><td><b>";
		echo $lang['Tipous'];
		echo "</b></td>";
    while($row=mysql_fetch_array($cs)){
		switch($row['tipo'])
		{
			case 1:
			$var = $lang['Admin'];
			break;
			case 2:
			$var = $lang['Agente'];
			break;
			case 3:
			$var = $lang['Perito'];
			break;
			case 4:
			$var = $lang['Cliente'];
			break;
		}
        echo "<tr><td>".$row['idUsuario']."</td><td>".$row['nombre']."</td><td>".$row['apellido']."</td><td>".$row['correo']."</td><td>".$var."</td></tr>";
    }
    echo"</table>";
    ?>
</form> 



 <div class="row">

<div class="form-group col-xs-6">
	 <label><?php echo $lang['Departamento']  ?>:</label>
	<select name="Departamento2" class="form-control" id="Departamento2">
		<option value=""><?php echo $lang['Nada'] ?></option>
		<option value="Ahuachapán">Ahuachapán</option>
		<option value="Cabañas">Cabañas</option>
		<option value="Chalatenango">Chalatenango</option>
		<option value="Cuscatlán">Cuscatlán</option>
		<option value="Morazán">Morazán</option>
		<option value="La Libertad">La Libertad</option>
		<option value="La Paz">La Paz</option>
		<option value="La Unión">La Unión</option>
		<option value="San Miguel">San Miguel</option>
		<option value="San Salvador">San Salvador</option>
		<option value="San Vicente">San Vicente</option>
		<option value="Santa Ana">Santa Ana</option>
		<option value="Sonsonate">Sonsonate</option>
		<option value="Usulután">Usulután</option>
	</select>
</div>

<div class="form-group col-xs-6">
<label><?php echo $lang['Municipio'] ?>:</label>
<select name="Municipio2" class="form-control" id="Municipio2">
	<option value="nada"><?php echo $lang['Nada'] ?></option>
	<?php include "../../Call/Funciones/InsideSelect/Ahu.php"; 
	include ".../../Call/Funciones/InsideSelect/Caba.php";
	include "../../Call/Funciones/InsideSelect/Cha.php" ;
	include "../../Call/Funciones/InsideSelect/Cus.php" ;
	include "../../Call/Funciones/InsideSelect/Mor.php" ;
	include "../../Call/Funciones/InsideSelect/LaL.php" ;
	include "../../Call/Funciones/InsideSelect/LaP.php";
	include "../../Call/Funciones/InsideSelect/Uni.php";
	include "../../Call/Funciones/InsideSelect/SaM.php";
	include "../../Call/Funciones/InsideSelect/SaS.php";
	include "../../Call/Funciones/InsideSelect/SaV.php";
	include "../../Call/Funciones/InsideSelect/SaA.php";
	include "../../Call/Funciones/InsideSelect/So.php";
	include "../../Call/Funciones/InsideSelect/Usu.php";
	?>
</select>
</div>
</div>
<div class="row">
<div class="form-group col-xs-6">
	 <label><?php echo $lang['Departamento']  ?>:</label>
	<select onchange="creator()" name="Departamento2" class="form-control" id="Departamento2">
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
<select name="Municipio2" onchange="creator()" class="form-control" id="Municipio2">
	<option value="nada"><?php echo $lang['Nada'] ?></option>
	<?php include "InsideSelect/Ahu.php";
	include "InsideSelect/Caba.php";
	include "InsideSelect/Cha.php" ;
	include "InsideSelect/Cus.php" ;
	include "InsideSelect/Mor.php" ;
	include "InsideSelect/LaL.php" ;
	include "InsideSelect/LaP.php";
	include "InsideSelect/Uni.php";
	include "InsideSelect/SaM.php";
	include "InsideSelect/SaS.php";
	include "InsideSelect/SaV.php";
	include "InsideSelect/SaA.php";
	include "InsideSelect/So.php";
	include "InsideSelect/Usu.php";
	?>
</select>
</div>
</div>

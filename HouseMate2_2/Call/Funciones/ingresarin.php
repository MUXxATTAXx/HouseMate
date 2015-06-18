<?php
	session_start();
	include("../../conexion.php");
	include("../Lenguaje/lenguaje.php");
	$Depa = $_POST['Departamento'];
	
	$objecto0 = trim($_POST['dirrecion']); 
	$objecto2 =  trim($_POST['descrip']);
	$objecto3 = trim($_POST['selector']);
	$objecto4 = trim($_POST['selector2']);
	if($Depa != null and $objecto0 != "" and $objecto2 != "" and $objecto3 != "" and $objecto4 != "nada")
	{
		if(isset($_POST['Municipio']) and $_POST['precio'] and isset($_POST['imagenfea']))
		{
			ingresar();
		}
		else
		{
				echo "<span class='label label-warning' id='error1'>llene todos los campos</span>";
				echo "<div class='col-sm-6 col-centered'> <a class='btn btn-danger btn-block ingresarin2' value='Insert'>".$lang['Verificar']."</a><div>";
		}
	}
	else
	{
		echo "<span class='label label-warning' id='error1'>llene todos los campos</span>";
		echo "<div class='col-sm-6 col-centered '> <a class='btn btn-danger btn-block ingresarin2' value='Insert'>".$lang['Verificar']."</a><div>";
	}
	function ingresar()
	{
	include("../Lenguaje/lenguaje.php");
	echo "<div class='row'> 
	<div class='col-sm-6 col-centered'> 
	<a class='btn btn-success btn-block ingresarin2' type='submit' value='Insert'>".$lang['Verificar']."</a>
	</div>
	<div class='col-sm-6 col-centered'> 
	<button class='btn btn-primary btn-block' type='submit' id='poderdej' value='Insertreal' name='insertarforreal'>".$lang['insert']."</button>
	</div>
	</div>
	";
	
	}
?>
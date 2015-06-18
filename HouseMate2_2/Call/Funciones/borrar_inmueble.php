<?php
	session_start();
	$id = $_POST['idre'];
	if(!empty($id)){
			delete($id);
	 }
	 else{
		 echo "here";
	 }
	function delete($id)
	{
		$con = mysql_connect('localhost','root', '');
		mysql_select_db('bdhousemate', $con);
		mysql_query("Set Names 'utf8'");
		include ("../Lenguaje/lenguaje.php");
		// Get the real id
		$idt =  str_replace("x","",$id);
		$ideli = $idt;
		
		echo $idt;
		// Ver si la casa existe
		$consulta = "SELECT * FROM inmueble WHERE IdInmueble = '$ideli'";
		$cs=mysql_query($consulta);
		$row=mysql_fetch_array($cs);
		// Saco la imagen
		$query = mysql_query("SELECT * FROM inmueble WHERE IdInmueble = '$ideli'");
		$arr = mysql_fetch_array($query);
		$filename = "../../".$arr['Imagen'];
		// Verifica si la imagen existe
		if($row > 0)
		{
			if (file_exists($filename)) {
			unlink($filename);
			$consulta2 = mysql_query("SELECT * FROM etiqueta WHERE Idinmueble = '$ideli'");
			$digito = mysql_num_rows($consulta2);
			$consulta3 = "DELETE FROM inmueble WHERE IdInmueble = '$ideli'";
			$cs=mysql_query($consulta3);
			
			$consulta4 = "UPDATE etiqueta SET IdEtiqueta = IdEtiqueta - $digito  WHERE Idinmueble > '$ideli'";
			$todo=mysql_query($consulta4);
			
			
			$consulta5 = "UPDATE inmueble SET IdInmueble = IdInmueble - 1  WHERE IdInmueble > '$ideli'";
			$cs=mysql_query($consulta5);
			echo "<span class='label label-success'>".$lang['Eliminado-inmueble']."</span>'";
			} 
			else {
				echo "<span class='label label-warning'>".$lang['error4']."</span>'";
			}		
		}
		else
		{
			echo "<span class='label label-warning'>".$lang['error4']."</span>";
		}
	}
?>	

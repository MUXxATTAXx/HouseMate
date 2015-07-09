<?php 
	session_start();
	$id = $_POST['id'];
	$empresa = $_POST['empresa'];
	if(isset($id) and isset($empresa)){
        delete($id,$empresa);
    }
	function delete($id,$empresa)
	{
		include("../../../conexion.php");
		include("../../Lenguaje/lenguaje.php");
		$idt =  str_replace("y","",$id);
		
		$query = mysql_query("Update empresasolicitud Set aprovado = '1' Where idsolicitud = '$idt' and idempresa = '$empresa'");
		$beforethetruth = mysql_query("Select usuario.idusuario From usuario inner join empresasolicitud on usuario.idusuario = empresasolicitud.idusuario 
		Where  empresasolicitud.idsolicitud = '$idt'");
		while ($row = mysql_fetch_array($beforethetruth))
		{
			$sujeto = $row['idusuario'];
			$verify = mysql_query("Select idusuario From usuario where idusuario = '$sujeto' and empresa <> null and empresa <> ''");
			$digito = mysql_num_rows($verify);
			
		}
		if($digito > 0)
		{
			echo "<label class='label label-warning'>".$lang['TE']."</label>";
			
		}
		else{
		$query2 = mysql_query("Update usuario set Empresa = '$empresa' Where idusuario = '$sujeto '");
		$query3 = mysql_query("Delete from empresasolicitud Where idsolicitud = '$idt' and idempresa = '$empresa'");
		$query2 = mysql_query("Update empresasolicitud Set idsolicitud = idsolicitud - 1 Where idsolicitud > '$idt'");
		echo "<label class='label label-success'>".$lang['modificar-exito']."</label>";}
	}
?>
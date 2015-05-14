<?php
include "conexion.php";
$quero = "SELECT * FROM inmueble ORDER BY IdInmueble DESC LIMIT 12";
$cs = mysql_query($quero); 
$me = mysql_num_rows($cs);
$end = "";
$count = 0;
$morf = 0;
$watch = 0;
while($row=mysql_fetch_array($cs))
{	
	if($count == 3)
	{
		$end = "";
		$count = 0;
		$morf = 0;
		$watch = 0;

	}
	switch ($morf)
	{
		case 0:
			$end = rand(1,3);
			$watch = $end;
		break;
		case 1:
			$end = rand(2,3);
			if($end == $watch)
			{
				switch($end)
				{
					case 2:
						$end = 3;
					break;
					case 3:
						$end = 2;
					break;
				}
			}
		break;
		case 2:
			$pro = mt_rand(1,2);
			switch($pro)
			{
				case 1:
					$end = 1;
					if ($end == $watch)
					{
						$end = 3;
					}
				break;
				case 2:
					$end = 3;
					if ($end == $watch)
					{
						$end = 1;
					}
				break;
			}
		break;
		case 3:
		$end = rand(1,2);
			if($end == $watch)
			{
				switch($end)
				{
					case 1:
						$end = 2;
					break;
					case 2:
						$end = 1;
					break;
				}
			}
		break;
	}
	switch ($end)
	{
		case 1:
	echo "<a href='inmueble.php?IdInmueble=".$row['IdInmueble']."'><div class='cover-card col-sm-3' style='background: url(".$row['Imagen'].") no-repeat center top;background-size:cover;'>
			<p>".$row['Descripcion']."</p>
		</div></a>";
		$morf = 1;
		$count++;
		break;
		case 2:
		echo "<a href='inmueble.php?IdInmueble=".$row['IdInmueble']."'><div class='cover-card col-sm-5' href='index.php?IdInmueble='".$row['IdInmueble']."' style='background: url(".$row['Imagen'].") no-repeat center top;background-size:cover;'>
			<p>".$row['Descripcion']."</p>
		</div></a>";
		$morf = 2;
		$count++;
		break;
		case 3:echo "<a href='inmueble.php?IdInmueble=".$row['IdInmueble']."'><div class='cover-card col-sm-4' href='index.php?IdInmueble='".$row['IdInmueble']."' style='background: url(".$row['Imagen'].") no-repeat center top;background-size:cover;'>
			<p>".$row['Descripcion']."</p>
		</div></a>";
		$morf = 3;
		$count++;
		break;
	}	
	
	
	
}
?>
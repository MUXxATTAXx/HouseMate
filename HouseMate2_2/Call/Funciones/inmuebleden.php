<?php
$maxc = 0;
$man="";
$aa = $_POST['a1'];
$bb = $_POST['a2'];
$cc = $_POST['a3'];
$dd = $_POST['a4'];
$ee = $_POST['a5'];
$a = '';
$b = '';
$c = '';
$d = '';
$e = '';
$v1 = 1;
$v2 = 1;
$v3 = 1;
$v4 = 1;
$v5 = 1;
if (isset($_POST['fancy-checkbox-primary-custom-icons1']))
{
	$check1 = 1;
	while($v1 <= $aa)
	{
		$valor = "1gate".$v1;
		echo $valor."<br>";
		$a .= "-".$_POST[$valor];
		$v1++;
	}
}
else{
	$check1 = 0;}
if (isset($_POST['fancy-checkbox-primary-custom-icons2']))
{
	$check2 = 1;
	while($v2 <= $bb)
	{
		$valor = "2gate".$v2;
		echo $valor."<br>";
		$b .= "-".$_POST[$valor];
		$v2++;
	}
}
else{
	$check2 = 0;}
if (isset($_POST['fancy-checkbox-primary-custom-icons3']))
{
	$check3 = 1;
	while($v3 <= $cc)
	{
		$valor = "3gate".$v3;
		echo $_POST[$valor];
		$c .= "-".$_POST[$valor];
		$v3++;
	}
}
else{
	$check3 = 0;}
if (isset($_POST['fancy-checkbox-primary-custom-icons4']))
{
	$check4 = 1;
	while($v4 <= $dd)
	{
		$valor = "4gate".$v4;
		echo $valor."<br>";
		$d .= "-".$_POST[$valor];
		$v4++;
	}
}
else{
	$check4 = 0;}
if (isset($_POST['fancy-checkbox-primary-custom-icons5']))
{
	$check5 = 1;
	while($v5 <= $dd)
	{
		$valor = "5gate".$v5;
		echo $valor."<br>";
		$e .= "-".$_POST[$valor];
		$v5++;
	}
}
else{
	$check5 = 0;}
	$check6 = 1;
	$check7 = 1;
	$check8 = 1;
	$check9 = 1;
	$check10 = 1;


$f = $_POST['areax1'];
$g = $_POST['areax2'];
$h = $_POST['areax3'];
$k = $_POST['areax4'];
$j = $_POST['areax5'];

for ($i=1;$i <=10;$i++)
{
		switch ($i)
		{
			case 1:
			if ($check1 == 1)
			{
				if ($a != 0 || $a != null)
				{
					$maxc++;
					$man .= "a";
				}
			}
			break;
			case 2:
			if ($check2 == 1)
			{
				if ($b != 0 || $b != null)
				{
					$maxc++;
					$man .= "b";
				}
			}
			break;
			case 3:
			if ($check3 == 1)
			{
				if ($c != 0 || $c != null)
				{
					$maxc++;
					$man .= "c";
				}
			}
			break;
			case 4:
			if ($check4 == 1)
			{
				if ($d != 0 || $d != null)
				{
					$maxc++;
					$man .= "d";
				}
			}
			break;
			case 5:
			if ($check5 == 1)
			{
				if ($e != 0 || $e != null)
				{
					$maxc++;
					$man .= "e";
				}
			}
			break;
			case 6:
			if ($check6 == 1)
			{
				if ($f != 0 || $f != null)
				{
					$maxc++;
					$man .= "f";
				}
			}
			break;
			case 7:
			if ($check7 == 1)
			{
				if ($g != 0 || $g != null)
				{
					$maxc++;
					$man .= "g";
				}
			}
			break;
			case 8:
			if ($check8 == 1)
			{
				if ($h != 0 || $h != null)
				{
					$maxc++;
					$man .= "h";
				}
			}
			break;
			case 9:
			if ($check9 == 1)
			{
				if ($k != 0 || $k != null)
				{
					$maxc++;
					$man .= "i";
				}
			}
			break;
			case 10:
			if ($check10 == 1)
			{
				if ($j != 0 || $j != null)
				{
					$maxc++;
					$man .= "j";
				}
			}
			break;
		}
}
$array = array();
$Start = "INSERT INTO etiqueta(IdEtiqueta,IdInmueble,Netiqueta,Valor ) VALUES ";
$num = "Select * FROM etiqueta";
$nume = mysql_query($num);
$numeroreal = mysql_num_rows($nume);
$final_string ="";
$maximun = $maximun;
if ($maxc != 0)
{
	for ($n = 0; $n < $maxc; $n++)
	{
		$numeroreal++;
		$action = $numeroreal;
		array_push($array,substr($man,$n,1));
		if($n == $maxc-1)
		{
			switch ($array[$n])
			{
			case "a":
			$final_string .= "('$action','$maximun','1','$a');";
			break;
			case "b":
			$final_string .= "('$action','$maximun','2','$b');";
			break;
			case "c":
			$final_string .= "('$action','$maximun','3','$c');";
			break;
			case "d":
			$final_string .= "('$action','$maximun','4','$d');";
			break;
			case "e":
			$final_string .= "('$action','$maximun','5','$e');";
			break;
			case "f":
			$final_string .= "('$action','$maximun','6','$f');";
			break;
			case "g":
			$final_string .= "('$action','$maximun','7','$g');";
			break;
			case "h":
			$final_string .= "('$action','$maximun','8','$h');";
			break;
			case "i":
			$final_string .= "('$action','$maximun','9','$k');";
			break;
			case "j":
			$final_string .= "('$action','$maximun','10','$j');";
			break;
			}

		}
		else
		{
			switch ($array[$n])
			{
			case "a":
			$final_string .= "('$action','$maximun','1','$a'), ";
			break;
			case "b":
			$final_string .= "('$action','$maximun','2','$b'), ";
			break;
			case "c":
			$final_string .= "('$action','$maximun','3','$c'), ";
			break;
			case "d":
			$final_string .= "('$action','$maximun','4','$d'), ";
			break;
			case "e":
			$final_string .= "('$action','$maximun','5','$e'), ";
			break;
			case "f":
			$final_string .= "('$action','$maximun','6','$f'), ";
			break;
			case "g":
			$final_string .= "('$action','$maximun','7','$g'), ";
			break;
			case "h":
			$final_string .= "('$action','$maximun','8','$h'), ";
			break;
			case "i":
			$final_string .= "('$action','$maximun','9','$k'), ";
			break;
			case "j":
			$final_string .= "('$action','$maximun','10','$j'), ";
			break;
			}
		}
	}
	$theend = "";
	$theend .= $Start;
	$theend .= $final_string;
	copy($varing,"img/Houses/$imagevar");
	$ingresa2 = mysql_query($thehouse);
	$ingresa3 = mysql_query($theend);
	echo "<span class='label label-success'>" .$lang['ingresado']."</span>";
	}
else
{
	echo "<span class='label label-warning'>" .$lang['error2']."</span>";
}

?>

<?php
	if(isset($_SESSION['tip']))
	{
	$varme = $_SESSION['tip'];
	switch ($varme)
	{
		case 1:
		if (!isset($_SESSION['user']))
		{
			header('Location:inicio.php?#login-overlay');
		}
		break;
		case 2:
		if (!isset($_SESSION['user']))
		{
			header('Location:inicio.php?#login-overlay');
		}
		break;
		case 3:
		if (!isset($_SESSION['user']))
		{
			header('Location:inicio.php?#login-overlay');
		}
		break;
		case 4:
		if (!isset($_SESSION['user']))
		{
			header('Location:inicio.php?#login-overlay');
		}
		break;
		default:
			
		break;
	}
	}
	else
	{
	header('Location:inicio.php?#login-overlay');
	}

?>
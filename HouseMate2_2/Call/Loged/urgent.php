<?php
if(isset($_GET['actualstand']))
{
	$transac = $_GET['actualstand'];
	switch ($transac)
	{
		case 1:
			echo "<ul id='what' class='nav nav-tabs'>
    <li id='me' class='active'><a href='#home' data-toggle='tab'>
	".$lang['Crear-Usuario']."
	</a></li>
    <li id='me2'><a href='#crear' data-toggle='tab'>
	".$lang['Ver-Usuario']."
	</a></li>
    <li id='me3'><a href='#sd' data-toggle='tab'>
	".$lang['Modificar-Usuario']."
	</a></li>
    <li id='me4'><a href='#eliminar' data-toggle='tab'>
	".$lang['Eliminar-Usuario']."
	</a></li>
</ul>";
		break;
		case 2:
		echo "<ul id='what' class='nav nav-tabs'>
    <li id='me'><a href='#home' data-toggle='tab'>
	".$lang['Crear-Usuario']."
	</a></li>
    <li id='me2' class='active'><a href='#crear' data-toggle='tab'>
	".$lang['Ver-Usuario']."
	</a></li>
    <li id='me3'><a href='#sd' data-toggle='tab'>
	".$lang['Modificar-Usuario']."
	</a></li>
    <li id='me4'><a href='#eliminar' data-toggle='tab'>
	".$lang['Eliminar-Usuario']."
	</a></li>
</ul>";
		break;
		case 3:
		echo "<ul id='what' class='nav nav-tabs'>
    <li id='me' ><a href='#home' data-toggle='tab'>
	".$lang['Crear-Usuario']."
	</a></li>
    <li id='me2'><a href='#crear' data-toggle='tab'>
	".$lang['Ver-Usuario']."
	</a></li>
    <li id='me3' class='active'><a href='#sd' data-toggle='tab'>
	".$lang['Modificar-Usuario']."
	</a></li>
    <li id='me4'><a href='#eliminar' data-toggle='tab'>
	".$lang['Eliminar-Usuario']."
	</a></li>
</ul>";
		break;
		case 4:
		echo "<ul id='what' class='nav nav-tabs'>
    <li id='me' ><a href='#home' data-toggle='tab'>
	".$lang['Crear-Usuario']."
	</a></li>
    <li id='me2'><a href='#crear' data-toggle='tab'>
	".$lang['Ver-Usuario']."
	</a></li>
    <li id='me3'><a href='#sd' data-toggle='tab' >
	".$lang['Modificar-Usuario']."
	</a></li>
    <li id='me4' class='active'><a href='#eliminar' data-toggle='tab'>
	".$lang['Eliminar-Usuario']."
	</a></li>
</ul>";
		break;
	}
}
else
{
echo "<ul id='what' class='nav nav-tabs'>
    <li id='me' class='active'><a href='#home' data-toggle='tab'>
	".$lang['Crear-Usuario']."
	</a></li>
    <li id='me2'><a href='#crear' data-toggle='tab'>
	".$lang['Ver-Usuario']."
	</a></li>
    <li id='me3'><a href='#sd' data-toggle='tab'>
	".$lang['Modificar-Usuario']."
	</a></li>
    <li id='me4'><a href='#eliminar' data-toggle='tab'>
	".$lang['Eliminar-Usuario']."
	</a></li>
</ul>";
}
?>
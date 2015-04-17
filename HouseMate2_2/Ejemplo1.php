<!DOCTYPE HTML>
<html>
<head>
	<title>Ejercicios BD</title>
	<meta charset = "utf-8" />
	<link href="css/estilo.css"	rel="stylesheet"	type="text/css" />
</head>
<body>  
<?PHP
require("header.html");
require("barranav.html");
?>
<div id="section">
    <h1>Ingreso base datos</h1>
</div>
<form action="Ejemplo1.php" method="POST">
    <fieldset>
        <legend>Alumno</legend>
        <input type="text" name="codigo" placeholder="Código" maxlength="6" /><br>
        <input type="text" name="nombre" placeholder="Nombre" maxlength="20" /><br>
        <input type="text" name="apellido" placeholder="Apellido" maxlength="20" /><br>
        <hr><h4>Género</h4>
        M<input type="radio" name="genero" value="M" />
        F<input type="radio" name="genero" value="F" /><hr>
        <input type="date" name="fechanac" />
        <select name="especialidad" required>
            <option>Infom&aacute;tica</option>
            <option>Diseño Gr&aacute;fico</option>
            <option>Electromecanica</option>
            <option>Electr&oacute;nica</option>
        </select><br>
        <input type="submit" name="ingresar" value="Ingresar" />
        <input type="submit" name="mostrar" value="Mostrar" />
        <input type="submit" name="actualizar" value="Actualizar" />
        <input type="submit" name="eliminar" value="Eliminar" />        
    </fieldset>
</form>
<br>
<?PHP
echo"<br>";
require("footer.html");
?>
</body>
</html>
<?php
//Boton Ingresar
//Revisamos que se dio click al boton ingresar
if (isset($_POST["ingresar"]) ){
    //Declaramos la variable de la conexion y se selecciona la base de datos
    $conexion = mysql_connect('localhost','root','');
    $db = mysql_select_db("bdEjemplo");
    mysql_query("SET NAMES 'utf8'");
    //Revisamos que no esten vacios los campos
    if( !empty($_POST["codigo"]) && !empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["genero"]) && !empty($_POST["fechanac"]) && !empty($_POST["especialidad"])){
    }
        $codigo = trim($_POST["codigo"]);
        $nombre = trim($_POST["nombre"]);
        $apellido = trim($_POST["apellido"]);
        $genero = $_POST["genero"];
        $fechanac = $_POST["fechanac"];
        $grado = $_POST["especialidad"];
    
        $consulta = "INSERT INTO tbAlumno VALUES ('$codigo','$nombre','$apellido','$genero','$fechanac','$grado')";
        if(mysql_query($consulta))
            echo "<p>Consulta guardada</p>";
        else
            echo "<p>Consulta de insertar fallo".mysql_error()."</p>";
}
else{
    //Si se encuentra vacio el form
    echo "Ingrese datos";
}


//Boton Mostrar
if (isset($_POST["mostrar"]) ){
    //Declaramos la variable de la conexion y se selecciona la base de datos
    $conexion = mysql_connect('localhost','root','');
    $db = mysql_select_db("bdEjemplo");
    mysql_query("SET NAMES 'utf8'");
    $consulta = "SELECT * FROM tbAlumno";
    //Revisamos que no esten vacios los campos
    $cs=mysql_query($consulta);
    echo"<form method='POST' /><table border=1px>";
        echo"<tr><td><b>Código</b></td><td><b>Nombre</b></td><td><b>Apellido</b></td><td><b>Género</b></td><td><b>Fecha de Nacimiento</b></td><td><b>Especialidad</b></td>";
    while($row=mysql_fetch_array($cs)){
        echo "<tr><td>".$row['codigo']."</td><td>".$row['nombre']."</td><td>".$row['apellido']."</td><td>".$row['genero']."</td><td>".$row['fechanac']."</td><td>".$row['especialidad']."</td></tr>";
    }
    echo("</table");
    if(mysql_query($consulta))
        echo "<p>Datos</p>";
    else
        echo "<p>Consulta de Mostrar fallo".mysql_error()."</p>";
    echo "</form>";
}

//Boton Eliminar
if (isset($_POST["eliminar"]) ){
    //Declaramos la variable de la conexion y se selecciona la base de datos
    $conexion = mysql_connect('localhost','root','');
    $db = mysql_select_db("bdEjemplo");
    if (!empty($_POST['codigo'])){
        mysql_query("SET NAMES 'utf8'");
        $codigo = trim($_POST["codigo"]);
        $consulta = "DELETE FROM tbAlumno WHERE codigo = '$codigo'";
        if(mysql_query($consulta))
            echo "<p>Usuario Eliminado</p>";
        else
            echo "<p>Consulta de Eliminar fallo".mysql_error()."</p>";
    }
    else{
        echo"Ingrese el codigo del alumno";
    }
}


//Boton Modificar
if (isset($_POST["actualizar"]) ){
    //Declaramos la variable de la conexion y se selecciona la base de datos
    $conexion = mysql_connect('localhost','root','');
    $db = mysql_select_db("bdEjemplo");
    mysql_query("SET NAMES 'utf8'");
    if(!empty($_POST['codigo'])){
        $codigo = trim($_POST["codigo"]);
        $nombre = trim($_POST["nombre"]);
        $apellido = trim($_POST["apellido"]);
        $genero = $_POST["genero"];
        $fechanac = $_POST["fechanac"];
        $especialidad = $_POST["especialidad"];
        $consulta = "UPDATE tbAlumno SET nombre='$nombre',apellido='$apellido',genero='$genero',fechanac='$fechanac',especialidad='$especialidad'  WHERE codigo='$codigo'";
        //Revisamos que no esten vacios los campos
        if(mysql_query($consulta))
            echo "<p>Datos actualizados</p>";
        else
            echo "<p>Consulta de Actualizar fallo".mysql_error()."</p>";
    }
}

?>

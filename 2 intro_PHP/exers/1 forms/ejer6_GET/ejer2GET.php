<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<p>Datos introducidos:</p>
<?php


/*
	foreach ($_GET as $indice => $valor) 
		echo "$indice: $valor<br>";
	
	echo "<br>GUSTOS:<br>";
	$gustos = $_GET["gustos"];
	foreach ($gustos as $indice => $valor) 
		echo "$indice: $valor<br>";

echo "Nombre: $_GET[nombre]<br>";
echo "Apellido: $_GET[apellidos]<br>";
echo "Correo: $_GET[correo]<br>";
echo "Estado civil: $_GET[estado]<br>";
echo "Número hijos: $_GET[hijos]<br>";
echo "Fecha1: $_GET[fecha1]<br>";
echo "Fecha2: $_GET[fecha2]<br>";
echo "<br>GUSTOS:<br>";
$gustos = $_GET["gustos"];
	foreach ($gustos as $indice => $valor) 
		echo "$valor<br>";

echo "<br> $_POST['gustos']:<br>";




		*/

echo "<br>Nombre:" ; print_r($_POST['nombre']);
echo "<br>Apellido:" ; print_r($_POST['apellidos']);
echo "<br>Correo:" ; print_r($_POST['correo']);
echo "<br>Estado civil:" ; print_r($_POST['estado']);
echo "<br>Número hijos:" ; print_r($_POST['hijos']);
echo "<br>Fecha1:" ; print_r($_POST['fecha1']);
echo "<br>Fecha2:" ; print_r($_POST['fecha2']);;
$test=implode(", ", $_POST['gustos']);
echo $test;
?>
</body>


</html>
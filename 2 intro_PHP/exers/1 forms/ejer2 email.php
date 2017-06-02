<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	<p>Email a validar: <input type="text" name="texto" value="" size="40"></p>
	<p><input type="submit" name="validar" value="Validar"></input></p>
</form>
<?php
if(isset($_POST['validar']) && isset($_POST['texto']) && strcasecmp($_POST['texto'],'') != ""){
	$email=$_POST['texto'];
	echo "<br>Email a analizar: $email<br>";
	echo "<br>";
	echo "Tiene " . strlen($email) . " letras<br>";

	// Indica la posición del caracter "@" o FALSE si no está
	$posicion_arroba = strpos($email, "@");
	// Busca la aparición de un punto (.) partir de la arroba
	$posicion_punto = strpos($email, ".", $posicion_arroba);
	if ($posicion_arroba && $posicion_punto) {
		echo "Es una direccion de email valida<br>";
		$usuario = substr($email, 0, $posicion_arroba);
		$dominio = substr($email, $posicion_arroba + 1);
		echo "El nombre de usuario es: $usuario<br>";
		echo "El dominio es: $dominio<br>";
	} else {
		echo "No es una direccion de email valida<br>";
		if (!$posicion_arroba) 
			echo "Le falta el caracter arroba<br>";
		if (!$posicion_punto) 
			echo "El dominio no es valido<br>";
	}	
	
	//if (ereg( "([A-Za-z0-9\.|-|_]+)[@]{1}([A-Za-z0-9\.|-|_]+)[.]{1}([A-Za-z]+)", $mail))
		//echo "Email Valido";
	//else
		//echo "Email No valido!!!!";

}else if(isset($_POST['validar'])===true && isset($_POST['texto']) === true  && strcasecmp($_POST['texto'],'') == "")
	echo "<br> Introduce una direccion de email";
?>
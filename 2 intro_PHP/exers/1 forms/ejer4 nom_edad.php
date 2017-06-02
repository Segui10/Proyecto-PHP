<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style>
		  <!--.aviso { color: #ff0000; font-family: arial; font-size: 10pt; fontstyle:italic }-->
	</style>
</head>
<body>
<?php
	function recoge($var){ 
		$tmp = (isset($_REQUEST[$var])) ? strip_tags(trim(htmlspecialchars($_REQUEST[$var]))) : '';
		if (get_magic_quotes_gpc()) 
			$tmp = stripslashes($tmp);
		return $tmp;
	}

	if (isset($_GET['enviar'])){
		$nombre = recoge('nombre');
		$edad   = recoge('edad');
		$nombreOk = FALSE;
		$edadOk   = FALSE;

		if ($nombre=="") 
			print "<p class=\"aviso\">No ha escrito su nombre</p>\n";
		else 
			$nombreOk = TRUE;

		if ($edad=="") 
			print "<p class=\"aviso\">No ha escrito su edad</p>\n";
		elseif (!is_numeric($edad)) 
			print "<p  class=\"aviso\">No ha escrito la edad como numero</p>\n";
		elseif (!ctype_digit($edad))  
			print "<p class=\"aviso\">No ha escrito la edad como numero entero</p>\n";
		elseif ($edad<0 || $edad>110) 
			print "<p class=\"aviso\">La edad no esta entre 0 y 110 anyos</p>\n";
		else 
			$edadOk = TRUE;
	}else{
		$nombreOk = FALSE;
		$edadOk   = FALSE;
	}	
	
	if (isset($_GET['enviar']) && $nombreOk && $edadOk) {
		print "<p>Su nombre es <strong>$nombre</strong></p>\n";
		print "<p>Su edad es <strong>$edad</strong></p>\n";
	}else{
	?>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
			Nombre:  <input type="text" name="nombre" value="" size="20"> <br>
			Edad: <input type="text" name="edad" value="" size="20"> <br>	
			<input type="submit" name="enviar" value="enviar">
		</form>
	<?php
	}
	?>
</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Suma de 2 numeros</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	<center>
		<h1> Suma de dos numeros </h1>
		<p> Numero 1 <input type="text" align="LEFT" name="numero1" />
		<p> Numero 2 <input type="text" align="LEFT" name="numero2" />
		<br> <br>
		<input type="submit" name="enviar" value="enviar" />
		<br> <br>
	<?php
		if (isset($_POST['enviar']) && strcasecmp($_POST['numero1'],'') != 0 && strcasecmp($_POST['numero2'],'') != 0){
			$resultado=$_POST['numero1'] + $_POST['numero2'];
			echo "Resultado = $resultado";
		}else if (isset($_POST['enviar']) && isset($_POST['numero1'])  && strcasecmp($_POST['numero1'],'') == 0)
			echo 'Introduce el n&uacute;mero 1';
		else if (isset($_POST['enviar']) && isset($_POST['numero2'])  && strcasecmp($_POST['numero2'],'') == 0)
			echo 'Introduce el n&uacute;mero 2';
	?>
	</center>
	</form>
</body>
</html>

	

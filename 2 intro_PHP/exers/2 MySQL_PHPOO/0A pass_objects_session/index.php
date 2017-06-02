<?php
	require_once 'Usuario.php';
	session_start();
	
	$usuario = new Usuario('Enrique');
	echo 'Hola, mi nombre es '.$usuario.'<br>';
	
	$_SESSION['usuario'] = $usuario;//almaceno en la sesion un objeto Enrique de tipo Usuario
?>
<a href="siguiente.php">siguiente</a>

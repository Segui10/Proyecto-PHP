<?php
	require_once 'Usuario.php';
	session_start();

	$usuario = $_SESSION['usuario'];//obtengo de la sesion el objeto Enrique de tipo Usuario
	echo 'Hola, mi nombre es '.$usuario .' y '.$usuario->getTest();
?>

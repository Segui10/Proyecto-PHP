<?php
	include("functions.inc.php");
	include("validate_users.php");
	include ("connect.php");
	session_start();

	$error = false;
	$error_nom = false;
	$error_titulo = false;
	$error_descripcion = false;
	$error_productora = false;
	if (isset($_POST['alta'])) {
		$error_nom = EsRequerido($_POST['nombre']);
		$error_titulo = EsRequerido($_POST['titulo']);
		$error_descripcion = EsRequerido($_POST['descripcion']);
		$error_productora = EsRequerido($_POST['productora']);
		if($error_titulo){ 
			$error_titulo = "El titulo no puede estar en blanco";
			$error = true;
		}
		if($error_descripcion){ 
			$error_descripcion = "El descripcion no puede estar en blanco";
			$error = true;
		}
		if($error_productora){ 
			$error_productora = "El productora no puede estar en blanco";
			$error = true;
		}
		if($error_nom){ 
			$error_nom = "El nombre no puede estar en blanco, puedes poner Anonimo";
			$error = true;
		}
		if (!$error) {
			//debug($_POST);
			//exit();
			
			$mensaje="Su registro se ha efectuado correctamente para finalizar compruebe que ha recibido un correo de validacion y siga las instrucciones del correo";
			$_SESSION['user']=$_POST;
			$_SESSION['msje']=$mensaje;
			$callback = 'results_users.php';

			//header("Location:$callback");
			die('<script>top.location.href="'.$callback .'";</script>');
		}
	}
	include 'form_users.php';

<html>
	<head>
		<style>
		  <!--
		    .stynormal { font-family: arial; font-size: 10pt; }
		    .styerror { color: #ff0000; font-family: arial; font-size: 10pt; fontstyle:italic }
		  -->
		</style>
	</head>
<body>
<?php 
	include_once('valida.inc');
	$campos = array('nombre','nota');
	$tipos = array('texto','entero');
	$errores = array(false, false);
	
	if (isset($_POST['datosenviados'])){
		$datos = $_POST['datos'];
		$errores = array(false, false);
		if (camposcorrectos($datos, $tipos, $errores)) 
			$hayerroresenformulario = false;
		else 
			$hayerroresenformulario = true;
	}else{
		$datos = array("","");
		$errores = array(false, false);
		$hayerroresenformulario = false;
	}
	
	if (isset($_POST['datosenviados']) && $hayerroresenformulario === false){
		for ($i=0; $i < count($datos); ++$i) 
			echo '<div>'.$campos[$i].': '.$datos[$i].'</div>';
	}else{
	?>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
		<fieldset>
			<legend>alumno</legend>
			<div class="<?php echo $errores[0]?'styerror">*':'stynormal">'; ?>
				<?php echo $campos[0]?> : <input type="text" name="datos[]" value="<?php $datos[0] ?>"size="10">
			</div>
			<div class="<?php echo $errores[1]?'styerror">*':'stynormal">'; ?>
				<?php echo $campos[1]?> : <input type="text" name="datos[]" value="<?php $datos[1] ?>"size="5">
			</div>
		</fieldset>
		<input type="submit" name="datosenviados" value="enviar">
	</form>
   <?php
   if ($hayerroresenformulario === true)
		echo '<div class="styerror">* vuelva a introducir los campos no válidos</div>';
   }
?>
</body>
</html>

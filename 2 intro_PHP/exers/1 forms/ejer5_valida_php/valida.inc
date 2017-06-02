<?php
    function EsTexto($texto){
		$reg="^[A-Za-z]+[A-Za-z0-9]*$";
		return ereg($reg,$texto);
	}
	function EsNumerico($texto){ 
		$reg = "^[0-9]+$";
		return ereg($reg, $texto); 
	}
	function CamposCorrectos($datos, $tipos, &$errores){
		$correctos = true;
		for ($i=0; $i < count($datos); ++$i){
			switch($tipos[$i]){
				case 'texto': $errores[$i] =!EsTexto($datos[$i]);
								break;
				case 'entero': $errores[$i] =!EsNumerico($datos[$i]);
								break;
			}
			if ($errores[$i] === true) 
				$correctos = false;
		}
		return $correctos;
	}
?>

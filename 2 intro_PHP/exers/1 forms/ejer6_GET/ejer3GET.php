<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<?php
	$menu = array (1 => "Editorial", 2 => "Opini&oacute;n", 3 => "Regional", 4 => "Nacional");
	echo ("--Revista Digital--<br><br>");
	echo ("--MENU--<br>");
	foreach ($menu as $indice => $valor) 
		echo ("<a href=\"ejer3GET.php?menu1=$indice\">$valor</a><br>");
	
	if(isset($_GET["menu1"])){
		echo ("<br>--NOTICIAS--<br>");
		switch ($_GET["menu1"]) {
			case 1:
				echo ("Editorial");
				break;
			case 2:
				echo ("Opini&oacute;n");
				break;
			case 3:
				echo ("Regional");
				break;
			case 4:
				echo ("Nacional");	
				break;
			default:
				echo ("Noticias de Portada");
				break;	
		}
	}
?>
</body>
</html>
<html>
	<head><title>Busqueda de datos</title></head>
	<body>
		<?php
		if(isset($_POST['codigo']) && isset($_POST['tipo'])){
			$host = '127.0.0.1';  
    		$user = "yomogan";                     
    		$pass = "";                             
    		$db = "bd1";                      
    		$port = 3306;                           //The port #. It is always 3306
    		$tabla="tabla1";

			$conexion = mysql_connect($host,$user,$pass);
			if (!$conexion)
				echo "Error conectando con el servidor $host.";
			else{
				$resultado=mysql_select_db($db,$conexion);
				if (!$resultado)
					echo "Error seleccionando la base de datos $db.";
				else{
					// Comprobaremos si existe un articulo con ese codigo y ese tipo.
					$sql = " SELECT * FROM $tabla WHERE codigo='".$_POST['codigo']."'";
					$sql.= " and tipo='".$_POST['tipo']."';";
					$resultado = mysql_query($sql,$conexion);
					if (!$resultado)
						echo "Se produjo un error al intentar consultar $tabla";
					else{
						if (mysql_num_rows($resultado)>0){
							$fila = mysql_fetch_array($resultado); // Obtenemos la primera fila.
							echo "Datos: ".$fila['codigo']." ".$fila['nombre']." ".$fila['tipo']." ".$fila['existencias']; 
						} 
						else
							echo "No se encontro el articulo ".$_POST['codigo']." de tipo ".$_POST['tipo'];
					}
				}
				mysql_close($conexion);
			}
		}
		else{
			echo "Introduzca primero los datos en el formulario<br>\n";
			echo "<a href='index.html'>Volver</a>";
		}
		?>
	</body>
</html>

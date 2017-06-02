<?php
    include ("connect.php");
    
	class DAOUser{
		function nuevo_user($user){
			 $test=implode(", ", $user['generos']);
			 $sql = "INSERT INTO $user[tipo](titulo, generos, descripcion, productora"
                . ") VALUES ('$user[titulo]', '$test', '$user[descripcion]',"
                . " '$user[productora]')";
             $tipo="$user[tipo]";
            $conexion = connect::con($tipo);
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
	}
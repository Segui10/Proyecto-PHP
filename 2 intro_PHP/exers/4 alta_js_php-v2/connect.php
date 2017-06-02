<?php
	class connect{
		public static function con($tipo){
			$host = 'localhost';  
    		$user = "root";                     
    		$pass = "";                             
    		$db = "firemovie";                      
    		$port = 3306;                           
    		$tabla=$tipo;
    		
    		$conexion = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}
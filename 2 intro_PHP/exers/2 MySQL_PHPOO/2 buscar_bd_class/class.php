<?php
	class Conectar{
		public static function con(){
			$host = getenv('IP');  
    		$user = "yomogan";                     //Your Cloud 9 username
    		//$user = getenv('C9_USER');
    		$pass = "";                             //Remember, there is NO password!
    		$db = "blog";                      //Your database name you want to connect to
    		$port = 3306;                           //The port #. It is always 3306
    		$tabla="posts";
    		
    		$conexion = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}

	class Buscador{
		function buscar(){
			$busqueda=array();
			$cad="";
			$sql = "SELECT * FROM posts WHERE titulo like '%".$_GET['s']."%' OR cuerpo like '%".$_GET['s']."%';";
                
			$conexion = Conectar::con();
			
			$res = mysqli_query($conexion, $sql);
			while ($reg = mysqli_fetch_assoc($res)) {
        		$this->busqueda[] = $reg;
    		}
    	
            Conectar::close($conexion);
			return $this->busqueda;
		}
	}
?>

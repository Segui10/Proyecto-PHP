<?php
    //include connect.php
    
	class DAOUser{
		function nuevo_user($user){
			 $sql = "INSERT INTO mensajes(nombre, email, asunto, mensaje,"
                . " hora, fecha) VALUES ('$user[nombre]', '$user[email]', '$user[asunto]',"
                . " '$user[mensaje]', now(), now())";
            
            $conexion = Conectar::con();
            $res = mysqli_query($conexion, $sql);
            Conectar::close($conexion);
			return $res;
		}
		
		function buscar_user(){
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
		
		function list_fetch_assoc_user(){
			$cad="";
			$sql = "select * from mensajes";
                
			$conexion = Conectar::con();
			
			$result = mysqli_query($conexion, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
        		$cad .= "Nombre: " . $row['nombre'] . " Email: " . $row['email']. "<br>";
        		$cad .= "Asunto: " . $row['asunto'] . " Msje: " . $row['mensaje']. "<br>";
    		}
    	
            Conectar::close($conexion);
			return $cad;
		}
		
		function list_fetch_array_user(){
			$cad="";
			$sql = "select * from mensajes";
                
			$conexion = Conectar::con();
			
			$result = mysqli_query($conexion, $sql);
			while ($row = mysqli_fetch_array($result)) {
        		$cad .= "Nombre: " . $row[1] . " Email: " . $row[2]. "<br>";
        		$cad .= "Asunto: " . $row[3] . " Msje: " . $row[4]. "<br>";
    		}
    	
            Conectar::close($conexion);
			return $cad;
		}
	}
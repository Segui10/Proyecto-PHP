<?php
    include("model/connect.php");
    
	class DAOUser{
		function insert_user($datos){
			$titulo=$datos[title];
        	$tipo=$datos[tipo];
        	$relasedate=$datos[fecha_nacimiento];
        	$descripcion=$datos[descripcion];
        	foreach ($datos[generos] as $indice) {
        	    $generos=$generos."$indice:";
        	}
            $productora=$datos[productora];
            $addfor=$datos[addfor];
            $img=$datos[img];
            $emision=$datos[emision];
        	$sql = " INSERT INTO series (titulo, tipo, generos, relasedate, descripcion, productora, addfor, emision, img)"
        		. " VALUES ('$titulo', '$tipo', '$generos', '$relasedate', '$descripcion', '$productora', '$addfor', '$emision', '$img')";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_user(){
			$sql = "SELECT * FROM series ORDER BY titulo ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
		
		function select_user($titulo){
			$sql = "SELECT * FROM series WHERE titulo='$titulo'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_user($datos){
			$user=$datos[usuario];
        	$passwd=$datos[pass];
        	$name=$datos[nombre];
        	$dni=$datos[DNI];
        	$sex=$datos[sexo];
        	$birthdate=$datos[fecha_nacimiento];
        	$age=$datos[edad];
        	$country=$datos[pais];
        	foreach ($datos[idioma] as $indice) {
        	    $language=$language."$indice:";
        	}
        	$comment=$datos[observaciones];
        	foreach ($datos[aficion] as $indice) {
        	    $hobby=$hobby."$indice:";
        	}
        	
        	$sql = " UPDATE usuario SET pass='$passwd', name='$name', dni='$dni', sex='$sex', birthdate='$birthdate', age='$age',"
        		. " country='$country', language='$language', comment='$comment', hobby='$hobby' WHERE user='$user'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_user($titulo){
			$sql = "DELETE FROM series WHERE titulo='$titulo'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}
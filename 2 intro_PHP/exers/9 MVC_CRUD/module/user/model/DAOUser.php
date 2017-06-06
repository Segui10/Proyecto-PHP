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
            $youtube=$datos[youtube];
        	$sql = " INSERT INTO series (titulo, tipo, generos, relasedate, descripcion, productora, addfor, emision, img, youtube)"
        		. " VALUES ('$titulo', '$tipo', '$generos', '$relasedate', '$descripcion', '$productora', '$addfor', '$emision', '$img', '$youtube')";
            
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

        function select_all_user_emision(){
            $sql = "SELECT * FROM series ORDER BY emision DESC";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        function select_all_user_fecha(){
            $sql = "SELECT * FROM series ORDER BY relasedate ASC";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        function select_peliculas(){
            $sql = "SELECT * FROM series  WHERE tipo='Pelicula' ORDER BY titulo ASC";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        function select_series(){
            $sql = "SELECT * FROM series WHERE tipo='Serie' ORDER BY titulo ASC";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        

         function select_peliculas_fecha(){
            $sql = "SELECT * FROM series  WHERE tipo='Pelicula' ORDER BY relasedate ASC";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        function select_series_fecha(){
            $sql = "SELECT * FROM series WHERE tipo='Serie' ORDER BY relasedate ASC";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

         function select_peliculas_emision(){
            $sql = "SELECT * FROM series  WHERE tipo='Pelicula' ORDER BY emision DESC";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

        function select_series_emision(){
            $sql = "SELECT * FROM series WHERE tipo='Serie' ORDER BY emision DESC";
            
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
			$titulo=$datos['title'];
            $tipo=$datos['tipo'];
            $relasedate=$datos['fecha_nacimiento'];
            $descripcion=$datos['descripcion'];
            $generos='';
            foreach ($datos['generos'] as $indice) {
                $generos=$generos."$indice:";
            }
            $productora=$datos['productora'];
            $addfor=$datos['addfor'];
            $img=$datos['img'];
            $emision=$datos['emision'];
            $youtube=$datos['youtube'];
            $sql = " UPDATE series SET titulo='$titulo', tipo='$tipo', generos='$generos', relasedate='$relasedate', descripcion='$descripcion', productora='$productora',"
                . " addfor='$addfor', emision='$emision', img='$img', youtube='$youtube' WHERE titulo='$titulo'";
            
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
<?php
	class Usuario{
		private $id;
		private $nombre;
		private $apellidos;
		private $codigoPostal;
		
		function __construct($id, $nombre, $apellidos, $codigoPostal){
			$this->id = $id;
			$this->nombre = $nombre;
			$this->apellidos = $apellidos;
			$this->codigoPostal = $codigoPostal;
		}
		
		function getId(){
			return $this->id;
		}

		function setId($id){
			$this->id = $id;
		}

		function getNombre(){
			return $this->nombre;
		}

		function setNombre($nombre){
			$this->nombre = $nombre;
		}

		function getApellidos(){
			return $this->apellidos;
		}

		function setApellidos($apellidos){
			$this->apellidos = $apellidos;
		}

		function getCodigoPostal(){
			return $this->codigoPostal;
		}

		function setCodigoPostal($codigoPostal){
			$this->codigoPostal = $codigoPostal;
		}
	}
?>

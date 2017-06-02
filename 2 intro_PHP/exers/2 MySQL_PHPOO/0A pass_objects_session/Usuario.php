<?php
	class Usuario{
		private $_nombre ='';

		public function __construct ($nombre){
			$this->_nombre = $nombre;
		}
		
		public function __toString(){
			return $this->_nombre;
		}
		
		public function getTest(){
			return 'este es un metodo de testing';
		}
	}
?>

<?php
	class Ciudad{
		private $id;
		private $nombre_ciudad;
 
		function __construct(){}
 
		public function getNombre_ci(){
			return $this->nombre_ciudad;
		}
		public function setNombre_ci($nombre_ciudad){
			$this->nombre_ciudad = $nombre_ciudad;
		}

		public function getNombre_re(){
			return $this->nombre_region;
		}
		public function setNombre_re($nombre_region){
			$this->nombre_region = $nombre_region;
		}

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}


	}
?>
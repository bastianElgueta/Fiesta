<?php
	class Region{
		private $id;
		private $nombre_region;
 
		function __construct(){}
 
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
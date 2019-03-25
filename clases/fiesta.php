<?php
	class Fiesta{
		private $id;
		private $nombre;
		private $lugar;
		private $capacidad;
		private $fecha;
		private $costo;
		private $hora_ini;
		private $hora_ter;
		private $encargado; //quien solicita la fiesta
 
		function __construct(){}
 
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
 
		public function getLugar(){
			return $this->lugar;
		}
		public function setLugar($lugar){
			$this->lugar = $lugar;
		}
 
		public function getCapacidad(){
			return $this->capacidad;
		}
		public function setCapacidad($capacidad){
			$this->capacidad = $capacidad;
		}

		public function getFecha(){
			return $this->fecha;
		}
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}

		public function getCosto(){
			return $this->costo;
		}
		public function setCosto($costo){
			$this->costo = $costo;
		}

		public function getHora_ini(){
			return $this->hora_ini;
		}
		public function setHora_ini($hora_ini){
			$this->hora_ini = $hora_ini;
		}

		public function getHora_ter(){
			return $this->hora_ter;
		}
		public function setHora_ter($hora_ter){
			$this->hora_ter = $hora_ter;
		}

		public function getEncargado(){
			return $this->encargado;
		}
		public function setEncargado($encargado){
			$this->encargado = $encargado;
		}

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}


	}
?>
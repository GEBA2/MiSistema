<?php


class candidato{
    private $id;
    private $genero;
	private $Nombre;
	private $Apellido;
	private $Direccion;
	private $id_depa;
	private $id_muni;
	private $DUI;
	private $candidatura;
	private $Partido;
	private $Coalicion;

	public function getId(){
		 return $this->id;
	}

	public function setId($id){
		return $this->id;
	}

	public function getGenero(){
		 return $this->genero;
	}

	public function getNombre(){
		 return $this->Nombre;
	}

	public function getApellido(){
		return $this->Apellido;
	}

	public function getDireccion(){
		return $this->Direccion;
	} 

	public function getId_depa(){
		return $this->id_depa;
	}

	public function getId_muni(){
		return $this->id_muni;
	}

	public function getDUI(){
		return $this->DUI;
	}

	public function getCandidatura(){
		return $this->candidatura;
	}

	public function getPartido(){
		return $this->Partido;
	}

	public function getCoalicion(){
		return $this->Coalicion;
	}

	public function setGenero($genero){
		$this->genero = $genero;
	}

	public function setNombre($Nombre){
		$this->Nombre = $Nombre;
	}

	public function setApellido($Apellido){
		$this->Apellido = $Apellido;
	}

	public function setDireccion($Direccion){
		$this->Direccion = $Direccion;
	}

	public function setId_depa($id_depa){
		$this->id_depa = $id_depa;
	}

	public function setId_muni($id_muni){
		$this->id_muni = $id_muni;
	}

	public function setDUI($DUI){
		$this->DUI = $DUI;
	}

	public function setCandidatura($candidatura){
		$this->candidatura = $candidatura;
	}

	public function setPartido($Partido){
		$this->Partido = $Partido;
	}

	public function setCoalicion($Coalicion){
		$this->Coalicion = $Coalicion;
	}
}
<?php

class Votante{
	private $id;
	private $dui;
	private $genero;
	private $nombre;
	private $apellido;
	private $direccion;
	private $id_depa;
	private $id_muni;
	private $fechavenci;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getDui() {
		return $this->dui;
	}

	public function getGenero() {
		return $this->genero;
	}

	public function getNombre() {
		return $this->nombre;
	}

    public function getApellido() {
    	return $this->apellido;
    }

    public function getDireccion() {
    	return $this->direccion;
    }

    public function getId_depa() {
        return $this->id_depa;
    }

    
    public function getId_muni() {
        return $this->id_muni;
    }

    public function getFechavenci() {
    	return $this->fechavenci;
    }

	public function setDui($dui) {
		$this->dui = $dui;
	}  

    public function setGenero($genero) {
    	$this->genero = $genero;
    }

    public function setNombre($nombre) {
    	$this->nombre = $nombre;
    }

    public function setApellido($apellido) {
    	$this->apellido = $apellido;
    }

    public function setDireccion($direccion) {
    	$this->direccion = $direccion;
    }

    public function setId_depa($id_depa) {
    	$this->id_depa = $id_depa;
    }

    public function setId_muni($id_muni) {
    	$this->id_muni = $id_muni;
    }

    public function setFechavenci($fechavenci) {
    	$this->fechavenci = $fechavenci;
    }
}

<?php


    class cargo{
    private $id;
    private $tipo_cargo;
    private $year_electoral;
  
    //Generacion de metodos set y get para variable id_cargo
    public function setId($id){
        $this->id= $id;
    }

    public function getId(){
    return $this->id; 
    }

    //Generacion de metodos set y get para variable tipo_cargo
    public function setTipo_cargo($tipo_cargo){
        $this->tipo_cargo = $tipo_cargo;
    }

    public function getTipo_cargo(){
    return $this->tipo_cargo;
    }

    //Generacion de metodos set y get para variable year
    public function setYear_electoral($year_electoral){
        $this->year_electoral= $year_electoral;
    }

    public function getYear_electoral(){
    return $this->year_electoral;
    }
}

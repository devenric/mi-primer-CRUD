<?php
class Personas{
    public $id;
    public $nombre;
    public $edad;

    function __construct($id, $nombre, $edad){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    function getId(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getEdad(){
        return $this->edad;
    }

    function getDatos(){
        return $this->id . $this->nombre . $this->edad;
    }

    function display(){
        echo $this->id . "<br>" . $this->nombre . "<br>" . $this->edad . "<br>";
    }
}
?>
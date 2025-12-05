<?php
class Personas{
    private $id;
    private $nombre;
    private $edad;
    //metodos
        function __construct($id, $nombre, $edad){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        function getDatos(){
            return $this->id . $this->nombre . $this->edad;
        }
        function display(){
            echo $this->id . "<br>" . $this->nombre . "<br>" . $this->edad . "<br>";
        }
}
?>
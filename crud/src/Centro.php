<?php
class Centro {
    protected $personas = [];
    protected $contador;

    function __construct(){
        $this->personas = [];
    }

    function Crear($objeto){
        // Si es un objeto Personas, convertir a array asociativo
        if (is_object($objeto) && method_exists($objeto, 'getId')) {
            $fila = [
                'id' => $objeto->getId(),
                'nombre' => $objeto->getNombre(),
                'edad' => $objeto->getEdad()
            ];
        } elseif (is_array($objeto)) {
            $fila = $objeto;
        } else {
            return false;
        }
        
        $this->personas[] = $fila;
        return $this->personas;
    }

    function getPersonas(){
        return $this->personas;
    }
}
?>
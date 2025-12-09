<?php
class Profesores extends Personas{
    public function __construct($id, $nombre, $edad) {
        parent::__construct($id, $nombre, $edad);
    }
}

?>
<?php
require_once('./Modelo/BaseDeDatos.php');
require_once('./Modelo/Alumno.php');


class AlumnoDAO extends BaseDeDatos{

    public function __construct(){
        parent::__construct('alumno');

    }


    public function inserta(Alumno $a){
        $o = new stdClass();
        $o->nombre = $a->getNombre();
        $o->edad = $a->getEdad();
        $o->genero = $a->getGenero();
        $o->correo = $a->getCorreo();
        parent::insert($o);

    }

}

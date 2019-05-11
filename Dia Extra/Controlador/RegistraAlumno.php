<?php
require_once('./Modelo/Alumno.php');
require_once('./Modelo/AlumnoDAO.php');

/**
 * Clase que realiza el registro de un alumno
 */
class RegistraAlumno
{

  function __construct() {}

  public function registraAlumno(int $edad,
  string $nombre,
  string $correo,
  string $genero)
  {
    $alumno = new Alumno($edad,$nombre,$correo,$genero);
    $adao = new AlumnoDAO();
    return $adao->inserta($alumno);


  }
}

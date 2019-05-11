<?php
require_once('./Controlador/RegistraAlumno.php');
session_name('Escuela');
session_start();
return routeRequest();

function routeRequest()
{
  $uri = $_SERVER['REQUEST_URI'];
  if(preg_match("/^\/Escuela(\/index|\/)$/",$uri)){
    include './Vista/index.php';
  }elseif(preg_match("/^\/Escuela\/registrarget\?[\S]+$/",$uri)){
    $nombre= $_GET['nombre'];
    $correo= $_GET['correo'];
    $edad= $_GET['edad'];
    $genero= $_GET['genero'];
    $rg = new RegistraAlumno();
    $rg->registraAlumno($edad,$nombre,$correo,$genero);
    if($rg){
      echo "<h1>Se guardo el alumno : </h1><br>";
      echo "El nombre es : <b>$nombre</b> <br>";
      echo "La edad es <b>{$edad} </b> <br>";
      echo "<a href='/Escuela/registralumno'>Registra uno nuevo</a>";
    }else{
      echo"Algo salio mal";
    }
  }elseif(preg_match("/^\/Escuela\/registrarpost$/",$uri)){
    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $edad= $_POST['edad'];
    $genero= $_POST['genero'];
    $rg = new RegistraAlumno();
    $rg->registraAlumno($edad,$nombre,$correo,$genero);
    if($rg){
      $m = "Se guardo el alumno : \n";
      $m.="El nombre es : $nombre\n";
      $m.="La edad es : {$edad} ";
      echo json_encode(['status'=>200, 'message'=> $m]);
    }else{
      echo json_encode(['status'=>200, 'message'=> 'Algo salio mal']);
    }

  }elseif(preg_match("/^\/Escuela\/js\/([a-zA-Z])+.js$/",$uri)){
      $ruta = explode('/',$uri);
      $j = $ruta[3];
      // echo "$j";
      echo file_get_contents("./Vista/js/".$j);

  } elseif(preg_match("/^\/Escuela\/registralumno$/",$uri)){
      echo file_get_contents('./Vista/registra.php');
  }elseif(preg_match("/^\/Escuela\/veralumnos$/",$uri)){
      // $_SESSION['alumnos'] = "Los alumnos";
      echo file_get_contents('./Vista/alumnos.php');
  }else{
    echo "$uri\n";
    echo "<h1> Error 404 </h1>";
  }

}


 ?>

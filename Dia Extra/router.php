<?php
session_name('Escuela');
session_start();
return routeRequest();

function routeRequest()
{
  $uri = $_SERVER['REQUEST_URI'];
  // $ruta_partida = explode("/",$uri);
  // $ruta = explode('/',$uri);
  // foreach ($ruta as $key => $value) {
  //   print ("$key , $value <br>");
  // }
  if(preg_match("/^\/Escuela(\/index|\/)?$/",$uri)){
    // echo file_get_contents('./Vista/index.php');
    include './Vista/index.php';

  }elseif(preg_match("/^\/Escuela\/registrarget\?[\S]+$/",$uri)){
    $nombre = $_GET['nombre'];
    echo "el nombre es : <b>$nombre</b>";
  }elseif(preg_match("/^\/Escuela\/registrarpost$/",$uri)){
    $nombre = $_POST['nombre'];
    // echo "el nombre es : <b>Nombre</b>";
  echo json_encode(['status'=>200, 'message'=> $nombre]);
    //
    //

  }else{
    echo "$uri";
    echo "<h1> Error 404 </h1>";
  }

}


 ?>

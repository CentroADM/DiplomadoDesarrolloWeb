<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="formulario">
      <h2>Registra a un alumno</h2>
      <form class="form" action="/Escuela/registrarget"  method="get">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="correo" placeholder="Correo">
        <input type="number" name="edad" placeholder="Edad">
        <button id= "Registrar">Registrame GET</button>

      </form>
      <hr>
      <form id="formulario2"class="form" action="/Escuela/registrarpost"  method="post">
        <input id="nombre" type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="correo" placeholder="Correo">
        <input type="number" name="edad" placeholder="Edad">
        <button id= "Registrar">Registrame POST</button>

      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
      function registrar(usr){
        console.log('Registrando a :'+usr);
        $.ajax({
          url     : 'registrarpost',
          method  : 'POST',
          dataType: 'json',
          data    : {'nombre':usr},
          success :function(response){
            if(response.status==200){
              url = "/Escuela/index";
              alert(response.message);
              $(location).attr("href",url);
            }else{
              console.log(response);
              alert(response.message);
            }
          }
        });


      }
      $(document).ready(function(){
        console.log('listo');
        $('#formulario2').submit(function(){
          event.preventDefault();
          console.log('click');
          registrar($('#nombre').val());
        });
      });
    </script>

  </body>
</html>
